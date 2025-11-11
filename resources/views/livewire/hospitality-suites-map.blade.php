<div class="w-full">
    <!-- Título -->
    <div class="text-center mb-8">
        <h3 class="text-[#0094a7] text-3xl lg:text-4xl font-bold mb-2">
            Hospitality <span class="text-[#045e7c]">Suites</span>
        </h3>
    </div>

    <!-- SVG del plano -->
    <div class="max-w-6xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        <div class="w-full" id="hospitality-suites-container">
            {!! file_get_contents(public_path('img/HOSPITALITYSUITES.svg')) !!}
            
            <!-- Tooltip para mostrar empresa -->
            <div id="suite-tooltip" class="absolute opacity-0 transition-opacity duration-200 pointer-events-none">
                <span id="tooltip-text"></span>
                <div class="tooltip-arrow absolute top-full left-1/2 transform -translate-x-1/2 
                           border-l-4 border-r-4 border-t-4 border-transparent"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Datos de las suites desde Livewire
            const suites = @json($suites->keyBy('suite_number'));
            const tooltip = document.getElementById('suite-tooltip');
            const tooltipText = document.getElementById('tooltip-text');
            
            // Función para aplicar funcionalidad dinámica
            function applySuiteFunctionality() {
                for (let suiteNumber = 1; suiteNumber <= 17; suiteNumber++) {
                    const suite = suites[suiteNumber];
                    const paddedNumber = suiteNumber.toString().padStart(2, '0'); // "01", "02", "03", etc.
                    
                    // Buscar elementos de texto en el SVG que contengan el número de la suite
                    const textElements = document.querySelectorAll('#hospitality-suites-container text');
                    textElements.forEach(textEl => {
                        const textContent = textEl.textContent.trim();
                        if (textContent === paddedNumber || textContent === suiteNumber.toString()) {
                            // Si la suite está reservada, cambiar color a rojo
                            if (suite && suite.is_reserved) {
                                // Cambiar color del número
                                textEl.style.fill = '#ef4444'; // Rojo
                                textEl.style.fontWeight = 'bold';
                                
                                // Buscar el grupo padre que contiene todos los elementos de la suite
                                const suiteGroup = textEl.closest('g');
                                if (suiteGroup) {
                                    // Buscar todos los elementos gráficos en el grupo (contornos, formas)
                                    const graphicElements = suiteGroup.querySelectorAll('rect, circle, path, polygon, ellipse');
                                    graphicElements.forEach(element => {
                                        // Solo colorear elementos que no sean texto
                                        if (element.tagName !== 'text') {
                                            element.style.stroke = '#ef4444'; // Contorno rojo
                                            element.style.strokeWidth = '2px';
                                            element.style.fill = 'rgba(239, 68, 68, 0.1)'; // Relleno rojo semi-transparente
                                        }
                                    });
                                    
                                    // Agregar tooltip a todo el grupo si tiene empresa
                                    if (suite.company_name) {
                                        suiteGroup.style.cursor = 'pointer';
                                        
                                        suiteGroup.addEventListener('mouseenter', function(e) {
                                            tooltipText.textContent = suite.company_name;
                                            tooltip.style.opacity = '1';
                                            updateTooltipPosition(e);
                                        });
                                        
                                        suiteGroup.addEventListener('mousemove', updateTooltipPosition);
                                        
                                        suiteGroup.addEventListener('mouseleave', function() {
                                            tooltip.style.opacity = '0';
                                        });
                                    }
                                }
                            }
                        }
                    });
                }
            }
            
            // Función para actualizar posición del tooltip
            function updateTooltipPosition(e) {
                const rect = document.getElementById('hospitality-suites-container').getBoundingClientRect();
                tooltip.style.left = (e.clientX - rect.left + 10) + 'px';
                tooltip.style.top = (e.clientY - rect.top - 40) + 'px';
            }
            
            // Aplicar funcionalidad cuando el SVG esté cargado
            setTimeout(applySuiteFunctionality, 100);
        });
    </script>

    <style>
        #hospitality-suites-container {
            position: relative;
        }
        
        #hospitality-suites-container svg {
            width: 100%;
            height: auto;
        }
        
        /* Estilo mejorado para el tooltip */
        #suite-tooltip {
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
        
        #suite-tooltip #tooltip-text {
            color: #ffffff !important;
            text-shadow: none;
        }
        
        /* Flecha del tooltip */
        #suite-tooltip .tooltip-arrow {
            border-top-color: #000000 !important;
        }
    </style>
</div>
