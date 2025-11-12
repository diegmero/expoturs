<div class="w-full">
    <!-- Título -->
    <div class="text-center mb-8">
        <h3 class="text-[#0094a7] text-3xl lg:text-4xl font-bold mb-2">
            {!! __('messages.maps.negotiation_tables') !!}
        </h3>
    </div>

    <!-- SVG del plano -->
    <div class="max-w-6xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        <div class="w-full" id="negotiation-tables-container">
            <!-- SVG se insertará aquí con JavaScript para evitar conflictos -->
            
            <!-- Tooltip para mostrar empresa -->
            <div id="nego-table-tooltip" class="absolute opacity-0 transition-opacity duration-200 pointer-events-none">
                <span id="nego-tooltip-text"></span>
                <div class="nego-tooltip-arrow absolute top-full left-1/2 transform -translate-x-1/2 
                           border-l-4 border-r-4 border-t-4 border-transparent"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cargar y procesar el SVG con namespace único
            const container = document.getElementById('negotiation-tables-container');
            
            // Obtener el contenido del SVG
            let svgContent = `{!! addslashes(file_get_contents(public_path('img/ms-trabajo.svg'))) !!}`;
            
            // Agregar prefijo único a todos los IDs y referencias para evitar conflictos
            svgContent = svgContent.replace(/id="([^"]+)"/g, 'id="nego-$1"');
            svgContent = svgContent.replace(/url\(#([^)]+)\)/g, 'url(#nego-$1)');
            svgContent = svgContent.replace(/href="#([^"]+)"/g, 'href="#nego-$1"');
            svgContent = svgContent.replace(/xlink:href="#([^"]+)"/g, 'xlink:href="#nego-$1"');
            
            // CRÍTICO: Agregar prefijo a las clases CSS para evitar conflictos de estilos
            svgContent = svgContent.replace(/class="([^"]+)"/g, 'class="nego-$1"');
            svgContent = svgContent.replace(/\.cls-/g, '.nego-cls-');
            
            // Insertar el SVG procesado
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = svgContent;
            const svgElement = tempDiv.querySelector('svg');
            if (svgElement) {
                container.insertBefore(svgElement, container.firstChild);
            }
            
            // Datos de las mesas desde Livewire
            const tables = @json($tables);
            const tooltip = document.getElementById('nego-table-tooltip');
            const tooltipText = document.getElementById('nego-tooltip-text');
            
            // DEBUG: Verificar datos cargados
            console.log('📊 Mesas de Negociación cargadas:', tables);
            console.log('🔢 Total de mesas:', Object.keys(tables).length);
            
            // Contar reservadas
            const reservedTables = Object.values(tables).filter(t => t.is_reserved);
            console.log('🔴 Mesas reservadas:', reservedTables.length, reservedTables);
            
            // Función para aplicar funcionalidad dinámica
            function applyTableFunctionality() {
                console.log('🎨 Iniciando coloreo de mesas...');
                
                // DEBUG: Ver todos los números en el SVG
                const allTextElements = document.querySelectorAll('#negotiation-tables-container text');
                const svgNumbers = new Set();
                allTextElements.forEach(el => {
                    const text = el.textContent.trim();
                    if (text && !isNaN(text)) {
                        svgNumbers.add(text);
                    }
                });
                console.log('🔢 Números encontrados en SVG:', Array.from(svgNumbers).sort((a,b) => parseInt(a) - parseInt(b)));
                
                // DEBUG: Ver qué mesas están reservadas
                const reservedTableNumbers = Object.keys(tables).filter(key => tables[key].is_reserved);
                console.log('🔴 Números de mesas reservadas en BD:', reservedTableNumbers);
                
                let coloredCount = 0;
                
                for (let tableNumber = 1; tableNumber <= 112; tableNumber++) {
                    const table = tables[tableNumber];
                    
                    // Buscar elementos de texto en el SVG que contengan el número de la mesa
                    const textElements = document.querySelectorAll('#negotiation-tables-container text');
                    textElements.forEach(textEl => {
                        const textContent = textEl.textContent.trim();
                        
                        // CRÍTICO: El SVG usa formato con padding (01, 02, etc.)
                        const paddedNumber = tableNumber.toString().padStart(2, '0');
                        
                        // Comparar con ambos formatos: "1" y "01"
                        if (textContent === tableNumber.toString() || textContent === paddedNumber) {
                            // Si la mesa está reservada, cambiar color a rojo
                            if (table && table.is_reserved) {
                                console.log(`✅ Coloreando mesa #${tableNumber} (${paddedNumber}):`, table.company_name);
                                coloredCount++;
                                // Cambiar color del número
                                textEl.style.fill = '#ef4444'; // Rojo
                                textEl.style.fontWeight = 'bold';
                                
                                // Buscar el grupo padre que contiene todos los elementos de la mesa
                                const tableGroup = textEl.closest('g');
                                if (tableGroup) {
                                    // Buscar todos los elementos gráficos en el grupo (contornos, formas)
                                    const graphicElements = tableGroup.querySelectorAll('rect, circle, path, polygon, ellipse');
                                    graphicElements.forEach(element => {
                                        // Solo colorear elementos que no sean texto
                                        if (element.tagName !== 'text') {
                                            element.style.stroke = '#ef4444'; // Contorno rojo
                                            element.style.strokeWidth = '2px';
                                            element.style.fill = 'rgba(239, 68, 68, 0.1)'; // Relleno rojo semi-transparente
                                        }
                                    });
                                    
                                    // Agregar tooltip a todo el grupo si tiene empresa
                                    if (table.company_name) {
                                        tableGroup.style.cursor = 'pointer';
                                        
                                        tableGroup.addEventListener('mouseenter', function(e) {
                                            tooltipText.textContent = table.company_name;
                                            tooltip.style.opacity = '1';
                                            updateTooltipPosition(e);
                                        });
                                        
                                        tableGroup.addEventListener('mousemove', updateTooltipPosition);
                                        
                                        tableGroup.addEventListener('mouseleave', function() {
                                            tooltip.style.opacity = '0';
                                        });
                                    }
                                }
                            }
                        }
                    });
                }
                
                console.log(`✨ Proceso completado. Mesas coloreadas: ${coloredCount}`);
            }
            
            // Función para actualizar posición del tooltip
            function updateTooltipPosition(e) {
                const rect = document.getElementById('negotiation-tables-container').getBoundingClientRect();
                tooltip.style.left = (e.clientX - rect.left + 10) + 'px';
                tooltip.style.top = (e.clientY - rect.top - 40) + 'px';
            }
            
            // Aplicar funcionalidad cuando el SVG esté cargado (aumentado a 300ms para asegurar procesamiento)
            setTimeout(applyTableFunctionality, 300);
        });
    </script>

    <style>
        #negotiation-tables-container {
            position: relative;
        }
        
        #negotiation-tables-container svg {
            width: 100%;
            height: auto;
            /* Recortar más espacio superior donde estaban los elementos ocultos */
            clip-path: inset(180px 0 0 0);
            margin-top: -180px;
        }
        
        /* Ocultar elementos no deseados del SVG */
        #negotiation-tables-container .nego-cls-20,
        #negotiation-tables-container .nego-cls-6,
        #negotiation-tables-container .nego-cls-3 {
            display: none !important;
        }
        
        /* Estilo mejorado para el tooltip */
        #nego-table-tooltip {
            background-color: #000000 !important;
            color: #ffffff !important;
            border: 2px solid #333333;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            font-size: 14px;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 8px;
            z-index: 9999;
        }
        
        #nego-table-tooltip #nego-tooltip-text {
            color: #ffffff !important;
            text-shadow: none;
        }
        
        /* Flecha del tooltip */
        #nego-table-tooltip .nego-tooltip-arrow {
            border-top-color: #000000 !important;
        }
    </style>
</div>
