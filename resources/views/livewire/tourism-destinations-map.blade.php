<div class="w-full">
    <!-- Título -->
    <div class="text-center mb-8">
        <h3 class="text-[#0094a7] text-3xl lg:text-4xl font-bold mb-2">
            {!! __('messages.maps.tourism_destinations') !!}
        </h3>
    </div>

    <!-- SVG del plano -->
    <div class="max-w-6xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        <div class="w-full" id="tourism-destinations-container">
            <!-- SVG se insertará aquí con JavaScript para evitar conflictos -->
            
            <!-- Tooltip para mostrar empresa -->
            <div id="tour-destination-tooltip" class="absolute opacity-0 transition-opacity duration-200 pointer-events-none">
                <span id="tour-tooltip-text"></span>
                <div class="tour-tooltip-arrow absolute top-full left-1/2 transform -translate-x-1/2 
                           border-l-4 border-r-4 border-t-4 border-transparent"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cargar y procesar el SVG con namespace único
            const container = document.getElementById('tourism-destinations-container');
            
            // Obtener el contenido del SVG
            let svgContent = `{!! addslashes(file_get_contents(public_path('img/DESTINOSSALÓNGÓNDOLA.svg'))) !!}`;
            
            // Agregar prefijo único a todos los IDs y referencias para evitar conflictos
            svgContent = svgContent.replace(/id="([^"]+)"/g, 'id="tour-$1"');
            svgContent = svgContent.replace(/url\(#([^)]+)\)/g, 'url(#tour-$1)');
            svgContent = svgContent.replace(/href="#([^"]+)"/g, 'href="#tour-$1"');
            svgContent = svgContent.replace(/xlink:href="#([^"]+)"/g, 'xlink:href="#tour-$1"');
            
            // CRÍTICO: Agregar prefijo a las clases CSS para evitar conflictos de estilos
            svgContent = svgContent.replace(/class="([^"]+)"/g, 'class="tour-$1"');
            svgContent = svgContent.replace(/\.cls-/g, '.tour-cls-');
            
            // Insertar el SVG procesado
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = svgContent;
            const svgElement = tempDiv.querySelector('svg');
            if (svgElement) {
                container.insertBefore(svgElement, container.firstChild);
            }
            
            // Datos de los destinos desde Livewire
            const destinations = @json($destinations);
            const tooltip = document.getElementById('tour-destination-tooltip');
            const tooltipText = document.getElementById('tour-tooltip-text');
            
            // DEBUG: Verificar datos cargados
            console.log('🌍 Destinos & Cámaras cargados:', destinations);
            console.log('🔢 Total de destinos:', Object.keys(destinations).length);
            
            // Contar reservados
            const reservedDestinations = Object.values(destinations).filter(d => d.is_reserved);
            console.log('🔴 Destinos reservados:', reservedDestinations.length, reservedDestinations);
            
            // Función para aplicar funcionalidad dinámica
            function applyDestinationFunctionality() {
                console.log('🎨 Iniciando coloreo de destinos...');
                
                // DEBUG: Ver todos los números en el SVG
                const allTextElements = document.querySelectorAll('#tourism-destinations-container text');
                const svgNumbers = new Set();
                allTextElements.forEach(el => {
                    const text = el.textContent.trim();
                    if (text && !isNaN(text)) {
                        svgNumbers.add(text);
                    }
                });
                console.log('🔢 Números encontrados en SVG:', Array.from(svgNumbers).sort((a,b) => parseInt(a) - parseInt(b)));
                
                // DEBUG: Ver qué destinos están reservados
                const reservedDestinationNumbers = Object.keys(destinations).filter(key => destinations[key].is_reserved);
                console.log('🔴 Números de destinos reservados en BD:', reservedDestinationNumbers);
                
                let coloredCount = 0;
                
                // Determinar el rango máximo (ajustar según tu BD)
                const maxDestinations = Math.max(...Object.keys(destinations).map(k => parseInt(k)));
                
                for (let destNumber = 1; destNumber <= maxDestinations; destNumber++) {
                    const destination = destinations[destNumber];
                    
                    // Buscar elementos de texto en el SVG que contengan el número del destino
                    const textElements = document.querySelectorAll('#tourism-destinations-container text');
                    textElements.forEach(textEl => {
                        const textContent = textEl.textContent.trim();
                        
                        // CRÍTICO: El SVG puede usar formato con padding (01, 02, etc.)
                        const paddedNumber = destNumber.toString().padStart(2, '0');
                        
                        // Comparar con ambos formatos: "1" y "01"
                        if (textContent === destNumber.toString() || textContent === paddedNumber) {
                            // Si el destino está reservado, cambiar color a rojo
                            if (destination && destination.is_reserved) {
                                console.log(`✅ Coloreando destino #${destNumber} (${paddedNumber}):`, destination.company_name);
                                coloredCount++;
                                // Cambiar color del número
                                textEl.style.fill = '#ef4444'; // Rojo
                                textEl.style.fontWeight = 'bold';
                                
                                // Buscar el grupo padre que contiene todos los elementos del destino
                                const destinationGroup = textEl.closest('g');
                                if (destinationGroup) {
                                    // Buscar todos los elementos gráficos en el grupo (contornos, formas)
                                    const graphicElements = destinationGroup.querySelectorAll('rect, circle, path, polygon, ellipse');
                                    graphicElements.forEach(element => {
                                        // Solo colorear elementos que no sean texto
                                        if (element.tagName !== 'text') {
                                            element.style.stroke = '#ef4444'; // Contorno rojo
                                            element.style.strokeWidth = '2px';
                                            element.style.fill = 'rgba(239, 68, 68, 0.1)'; // Relleno rojo semi-transparente
                                        }
                                    });
                                    
                                    // Agregar tooltip a todo el grupo si tiene empresa
                                    if (destination.company_name) {
                                        destinationGroup.style.cursor = 'pointer';
                                        
                                        destinationGroup.addEventListener('mouseenter', function(e) {
                                            tooltipText.textContent = destination.company_name;
                                            tooltip.style.opacity = '1';
                                            updateTooltipPosition(e);
                                        });
                                        
                                        destinationGroup.addEventListener('mousemove', updateTooltipPosition);
                                        
                                        destinationGroup.addEventListener('mouseleave', function() {
                                            tooltip.style.opacity = '0';
                                        });
                                    }
                                }
                            }
                        }
                    });
                }
                
                console.log(`✨ Proceso completado. Destinos coloreados: ${coloredCount}`);
            }
            
            // Función para actualizar posición del tooltip
            function updateTooltipPosition(e) {
                const rect = document.getElementById('tourism-destinations-container').getBoundingClientRect();
                tooltip.style.left = (e.clientX - rect.left + 10) + 'px';
                tooltip.style.top = (e.clientY - rect.top - 40) + 'px';
            }
            
            // Aplicar funcionalidad cuando el SVG esté cargado (aumentado a 300ms para asegurar procesamiento)
            setTimeout(applyDestinationFunctionality, 300);
        });
    </script>

    <style>
        #tourism-destinations-container {
            position: relative;
        }
        
        #tourism-destinations-container svg {
            width: 100%;
            height: auto;
            /* Recortar más espacio superior donde estaban los elementos ocultos */
            clip-path: inset(180px 0 0 0);
            margin-top: -180px;
        }
        
        /* Ocultar elementos no deseados del SVG */
        #tourism-destinations-container .tour-cls-5,
        #tourism-destinations-container .tour-cls-3 {
            display: none !important;
        }
        
        /* Estilo mejorado para el tooltip */
        #tour-destination-tooltip {
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
        
        #tour-destination-tooltip #tour-tooltip-text {
            color: #ffffff !important;
            text-shadow: none;
        }
        
        /* Flecha del tooltip */
        #tour-destination-tooltip .tour-tooltip-arrow {
            border-top-color: #000000 !important;
        }
    </style>
</div>
