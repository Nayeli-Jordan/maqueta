<div id="qo_cotizaciones">
    <div class="row margin-bottom-large">
        <p>Para imprimir todo correctamente activa -> <strong>Imprimir > Configuración > Gráficos de fondo</strong></p><br>
        <p>* No olvides <strong>llenar la línea completa</strong>, de lo contrario no se mostrará ningún dato o marcará algún error.</p>
        <p>* <strong>Selecciona tu plantilla</strong> antes de llenar la información ya que no se muestran los mismos campos en todas.</p>
        <p>* Los <strong>Detalles</strong> sólo se muestran en la plantilla <em>Estilo de Descripción</em>.</p>
        <p>* La <strong>Imagen destacada</strong> corresponde al <em>logo del cliente</em>.</p>
        <br>
        <p><strong>°Plantilla Predeterminada</strong> ==> 4 Líneas / 4 imágenes.</br><strong>°Plantilla Horizontal</strong> ==> 2 Líneas / 4 imágenes.</br><strong>°Plantilla Vertical</strong> ==> 2 Líneas / 4 imágenes.</br><strong>°Plantilla con Descripción</strong> ==> 1 Línea / 4 imágenes.</p>
    </div>
    <div class="row bg-gray margin-bottom-large">
        <label>¿Cual es el estatus?*</label>
        <select name="qo_cotizaciones_estatus">
            <option value="VoBo" <?php selected($estatus, 'VoBo'); ?>>VoBo</option>
            <option value="Facturada" <?php selected($estatus, 'Facturada'); ?>>Facturada</option>
        </select>
        <label>¿Esta cotización incluirá IVA?*</label>
        <select name="qo_cotizaciones_iva_inc">
            <option value="Sí" <?php selected($iva_inc, 'Sí'); ?>>Sí</option>
            <option value="No" <?php selected($iva_inc, 'No'); ?>>No</option>
        </select>   
    </div>
	<div class="row text-center margin-bottom">
		<div class="col col-1_4">
			<label>Modelo</label>			
		</div>
		<div class="col col-1_4">
			<label>Nota</label>		
		</div>
		<div class="col col-1-2_4">
			<label>Piezas*</label>			
		</div>
		<div class="col col-1-2_4">
			<label>Precio (sin IVA)*</label>			
		</div>
        <div class="col col-1_4 col-detalle">
            <label>Detalles</label>         
        </div>
	</div>
	<div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo" value="<?php echo $modelo; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota" value="<?php echo $nota; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas" value="<?php echo $piezas; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio" value="<?php echo $precio; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle"><?php echo $detalle; ?></textarea></div>
        <div class="hide-on-templateHorizontal hide-on-templateVertical hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra_1" id="qo_cotizaciones_muestra_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra_2" id="qo_cotizaciones_muestra_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra_3" id="qo_cotizaciones_muestra_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra_4" id="qo_cotizaciones_muestra_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo2" value="<?php echo $modelo2; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota2" value="<?php echo $nota2; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas2" value="<?php echo $piezas2; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio2" value="<?php echo $precio2; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle2"><?php echo $detalle2; ?></textarea></div>
        <div class="hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra2_1" id="qo_cotizaciones_muestra2_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra2_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra2_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra2_2" id="qo_cotizaciones_muestra2_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra2_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra2_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra2_3" id="qo_cotizaciones_muestra2_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra2_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra2_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra2_4" id="qo_cotizaciones_muestra2_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra2_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra2_4; ?>">
                </div>
            </div>            
        </div>
    </div> 
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo3" value="<?php echo $modelo3; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota3" value="<?php echo $nota3; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas3" value="<?php echo $piezas3; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio3" value="<?php echo $precio3; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle3"><?php echo $detalle3; ?></textarea></div>
        <div class="hide-on-templateHorizontal hide-on-templateVertical hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra3_1" id="qo_cotizaciones_muestra3_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra3_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra3_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra3_2" id="qo_cotizaciones_muestra3_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra3_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra3_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra3_3" id="qo_cotizaciones_muestra3_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra3_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra3_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra3_4" id="qo_cotizaciones_muestra3_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra3_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra3_4; ?>">
                </div>
            </div>            
        </div>
    </div> 
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo4" value="<?php echo $modelo4; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota4" value="<?php echo $nota4; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas4" value="<?php echo $piezas4; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio4" value="<?php echo $precio4; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle4"><?php echo $detalle4; ?></textarea></div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra4_1" id="qo_cotizaciones_muestra4_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra4_1; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra4_1; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra4_2" id="qo_cotizaciones_muestra4_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra4_2; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra4_2; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra4_3" id="qo_cotizaciones_muestra4_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra4_3; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra4_3; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra4_4" id="qo_cotizaciones_muestra4_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra4_4; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra4_4; ?>">
            </div>
        </div>
    </div> 
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo5" value="<?php echo $modelo5; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota5" value="<?php echo $nota5; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas5" value="<?php echo $piezas5; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio5" value="<?php echo $precio5; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle5"><?php echo $detalle5; ?></textarea></div>
        <div class="hide-on-templateHorizontal hide-on-templateVertical hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra5_1" id="qo_cotizaciones_muestra5_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra5_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra5_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra5_2" id="qo_cotizaciones_muestra5_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra5_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra5_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra5_3" id="qo_cotizaciones_muestra5_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra5_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra5_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra5_4" id="qo_cotizaciones_muestra5_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra5_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra5_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo6" value="<?php echo $modelo6; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota6" value="<?php echo $nota6; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas6" value="<?php echo $piezas6; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio6" value="<?php echo $precio6; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle6"><?php echo $detalle6; ?></textarea></div>
        <div class="hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra6_1" id="qo_cotizaciones_muestra6_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra6_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra6_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra6_2" id="qo_cotizaciones_muestra6_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra6_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra6_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra6_3" id="qo_cotizaciones_muestra6_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra6_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra6_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra6_4" id="qo_cotizaciones_muestra6_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra6_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra6_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo7" value="<?php echo $modelo7; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota7" value="<?php echo $nota7; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas7" value="<?php echo $piezas7; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio7" value="<?php echo $precio7; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle7"><?php echo $detalle7; ?></textarea></div>
        <div class="hide-on-templateHorizontal hide-on-templateVertical hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra7_1" id="qo_cotizaciones_muestra7_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra7_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra7_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra7_2" id="qo_cotizaciones_muestra7_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra7_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra7_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra7_3" id="qo_cotizaciones_muestra7_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra7_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra7_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra7_4" id="qo_cotizaciones_muestra7_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra7_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra7_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo8" value="<?php echo $modelo8; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota8" value="<?php echo $nota8; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas8" value="<?php echo $piezas8; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio8" value="<?php echo $precio8; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle8"><?php echo $detalle8; ?></textarea></div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra8_1" id="qo_cotizaciones_muestra8_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra8_1; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra8_1; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra8_2" id="qo_cotizaciones_muestra8_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra8_2; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra8_2; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra8_3" id="qo_cotizaciones_muestra8_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra8_3; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra8_3; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra8_4" id="qo_cotizaciones_muestra8_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra8_4; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra8_4; ?>">
            </div>
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo9" value="<?php echo $modelo9; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota9" value="<?php echo $nota9; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas9" value="<?php echo $piezas9; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio9" value="<?php echo $precio9; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle9"><?php echo $detalle9; ?></textarea></div>
        <div class="hide-on-templateHorizontal hide-on-templateVertical hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra9_1" id="qo_cotizaciones_muestra9_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra9_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra9_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra9_2" id="qo_cotizaciones_muestra9_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra9_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra9_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra9_3" id="qo_cotizaciones_muestra9_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra9_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra9_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra9_4" id="qo_cotizaciones_muestra9_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra9_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra9_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo10" value="<?php echo $modelo10; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota10" value="<?php echo $nota10; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas10" value="<?php echo $piezas10; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio10" value="<?php echo $precio10; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle10"><?php echo $detalle10; ?></textarea></div>
        <div class="hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra10_1" id="qo_cotizaciones_muestra10_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra10_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra10_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra10_2" id="qo_cotizaciones_muestra10_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra10_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra10_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra10_3" id="qo_cotizaciones_muestra10_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra10_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra10_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra10_4" id="qo_cotizaciones_muestra10_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra10_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra10_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo11" value="<?php echo $modelo11; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota11" value="<?php echo $nota11; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas11" value="<?php echo $piezas11; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio11" value="<?php echo $precio11; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle11"><?php echo $detalle11; ?></textarea></div>
        <div class="hide-on-templateHorizontal hide-on-templateVertical hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra11_1" id="qo_cotizaciones_muestra11_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra11_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra11_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra11_2" id="qo_cotizaciones_muestra11_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra11_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra11_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra11_3" id="qo_cotizaciones_muestra11_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra11_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra11_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra11_4" id="qo_cotizaciones_muestra11_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra11_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra11_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo12" value="<?php echo $modelo12; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota12" value="<?php echo $nota12; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas12" value="<?php echo $piezas12; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio12" value="<?php echo $precio12; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle12"><?php echo $detalle12; ?></textarea></div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra12_1" id="qo_cotizaciones_muestra12_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra12_1; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra12_1; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra12_2" id="qo_cotizaciones_muestra12_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra12_2; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra12_2; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra12_3" id="qo_cotizaciones_muestra12_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra12_3; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra12_3; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra12_4" id="qo_cotizaciones_muestra12_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra12_4; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra12_4; ?>">
            </div>
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo13" value="<?php echo $modelo13; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota13" value="<?php echo $nota13; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas13" value="<?php echo $piezas13; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio13" value="<?php echo $precio13; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle13"><?php echo $detalle13; ?></textarea></div>
        <div class="hide-on-templateHorizontal hide-on-templateVertical hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra13_1" id="qo_cotizaciones_muestra13_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra13_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra13_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra13_2" id="qo_cotizaciones_muestra13_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra13_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra13_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra13_3" id="qo_cotizaciones_muestra13_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra13_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra13_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra13_4" id="qo_cotizaciones_muestra13_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra13_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra13_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo14" value="<?php echo $modelo14; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota14" value="<?php echo $nota14; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas14" value="<?php echo $piezas14; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio14" value="<?php echo $precio14; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle14"><?php echo $detalle14; ?></textarea></div>
        <div class="hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra14_1" id="qo_cotizaciones_muestra14_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra14_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra14_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra14_2" id="qo_cotizaciones_muestra14_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra14_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra14_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra14_3" id="qo_cotizaciones_muestra14_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra14_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra14_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra14_4" id="qo_cotizaciones_muestra14_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra14_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra14_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo15" value="<?php echo $modelo15; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota15" value="<?php echo $nota15; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas15" value="<?php echo $piezas15; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio15" value="<?php echo $precio15; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle15"><?php echo $detalle15; ?></textarea></div>
        <div class="hide-on-templateHorizontal hide-on-templateVertical hide-on-templateDefault">
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra15_1" id="qo_cotizaciones_muestra15_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra15_1; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra15_1; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra15_2" id="qo_cotizaciones_muestra15_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra15_2; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra15_2; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra15_3" id="qo_cotizaciones_muestra15_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra15_3; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra15_3; ?>">
                </div>
            </div>
            <div class="col col-1_4">
                <div class="input-image">
                    <input type="text" name="qo_cotizaciones_muestra15_4" id="qo_cotizaciones_muestra15_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra15_4; ?>">
                    <input type="button" class="button image-upload" value="Seleccionar">
                </div>
                <div class="image-preview">
                    <img src="<?php echo $muestra15_4; ?>">
                </div>
            </div>            
        </div>
    </div>
    <div class="row margin-bottom">
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_modelo16" value="<?php echo $modelo16; ?>"></div>
        <div class="col col-1_4"><input type="text" name="qo_cotizaciones_nota16" value="<?php echo $nota16; ?>"></div>
        <div class="col col-1-2_4"><input type="number" name="qo_cotizaciones_piezas16" value="<?php echo $piezas16; ?>"></div>
        <div class="col col-1-2_4"><input type="number" step=".01" name="qo_cotizaciones_precio16" value="<?php echo $precio16; ?>"></div>
        <div class="col col-1_4 col-detalle"><textarea name="qo_cotizaciones_detalle16"><?php echo $detalle16; ?></textarea></div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra16_1" id="qo_cotizaciones_muestra16_1" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra16_1; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra16_1; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra16_2" id="qo_cotizaciones_muestra16_2" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra16_2; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra16_2; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra16_3" id="qo_cotizaciones_muestra16_3" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra16_3; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra16_3; ?>">
            </div>
        </div>
        <div class="col col-1_4">
            <div class="input-image">
                <input type="text" name="qo_cotizaciones_muestra16_4" id="qo_cotizaciones_muestra16_4" class="meta-imaged" placeholder="Muestra" value="<?php echo $muestra16_4; ?>">
                <input type="button" class="button image-upload" value="Seleccionar">
            </div>
            <div class="image-preview">
                <img src="<?php echo $muestra16_4; ?>">
            </div>
        </div>
    </div>
</div>