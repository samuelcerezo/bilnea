<?php

/* Template Name: Política privacidad */

get_header();

?>

<div id="primary" class="main-row">
	<div id="content" role="main" class="span8 offset2">

		<?php

		if (have_posts()) {
			while (have_posts()) {
				the_post();

				?>

				<article class="post">
					<div class="the-content">
            <div class="container">

              <?php

              $txt = '';
              $txt .= '<div class="legal">'."\n";
              $txt .= '<h3>Información en cumplimiento de lo establecido en la ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio electrónico</h3>'."\n";
              $txt .= '<p>En cumplimiento de lo establecido en el artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (en adelante, LSSI-CE), se informa de modo expreso, preciso e inequívoco, tanto a los destinatarios del servicio como a los órganos competentes, de los siguientes aspectos relativos al prestador de servicios de la sociedad de la información.</p>'."\n";
              $txt .=	'<ul>'."\n";
              $txt .=	'<li>Denominación social: '.b_f_option('user_name').'</li>'."\n";
              $txt .=	'<li>Domicilio social: '.b_f_option('user_address').'</li>'."\n";
              $txt .=	'<li>CIF: '.b_f_option('user_cif').'</li>'."\n";
              $txt .=	'<li>Dirección de correo electrónico: <a href="mailto:'.b_f_option('user_email').'" title="Correo electrónico">'.b_f_option('user_email').'</a></li>'."\n";
              $txt .=	'<li>Teléfono: <a href="tel://'.b_f_option('user_phone').'" title="Teléfono">'.b_f_option('user_phone').'</a></li>'."\n";
              $txt .= '<li>Dirección web: '.str_replace('http://', '', get_site_url()).'</li>'."\n";
              $txt .=	'</ul>'."\n";
              $txt .= '<h3>Información en cumplimiento de lo establecido en la Ley Orgánica de Protección de Datos de Carácter Personal</h3>'."\n";
              $txt .= '<h4>Principio de información</h4>'."\n";
              $txt .= '<p>En cumplimiento de lo establecido en el artículo 5 de la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal (en adelante, LOPD), le informamos de modo expreso, preciso e inequívoco que los datos facilitados por usted a través de los formularios dispuestos al efecto en nuestra página web o en cualquier otro canal de recogida de los mismos, así como los que se generen durante su relación con nuestra entidad, serán objeto de tratamiento en los ficheros responsabilidad de '.b_f_option('user_name').' debidamente notificados en el Registro General de la Agencia Española de Protección de Datos, con la finalidad del mantenimiento y cumplimiento de la relación del destinatario del servicio con nuestra entidad y prestación de servicios derivada de la misma.</p>'."\n";
              $txt .= '<p>Así mismo, en cumplimiento de lo establecido en la citada LOPD y en la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (en adelante, LSSI-CE), le informamos que sus datos podrán ser utilizados con la finalidad de enviarle comunicaciones comerciales y de cortesía relacionadas con nuestra entidad a través del teléfono, correo postal ordinario, fax, correo electrónico o medios de comunicación electrónica equivalentes.</p>'."\n";
              $txt .= '<p>En '.b_f_option('user_name').' cumplimos con la normativa española de protección de datos de carácter personal, y garantizamos  el cumplimiento íntegro de las obligaciones dispuestas, así como la implementación de las medidas de seguridad dispuestas en el art. 9 de la Ley 15/1999, de Protección de Datos de Carácter Personal (LOPD) y en el Reglamento de Desarrollo de la LOPD 1720/2007.</p>'."\n";
              $txt .= '<p>Los usuarios, aceptan expresamente y de forma libre e inequívoca, antes de enviar su solicitud de información en el formulario de contacto que sus datos personales serán tratados para tramitar solicitudes o cualquier tipo de petición que sea realizada por el usuario a través de cualquiera de las formas de contacto que se ponen a disposición del usuario en el presente sitio web. Además su dirección de correo electrónico puede utilizarse para remitir el boletín de noticias de la página web, así como comunicaciones comerciales sobre los servicios que puedan ser de su interés, si así se estima oportuno.</p>'."\n";
              $txt .= '<p>De igual manera, le informamos que sus datos serán cedidos en todos aquellos casos en que sea necesario para el desarrollo, cumplimiento y control de la relación del destinatario del servicio con nuestra entidad o en los supuestos en que lo autorice una norma con rango de ley y, en particular, cuando concurra uno de los supuestos siguientes: a) El tratamiento o la cesión tengan por objeto la satisfacción de un interés legítimo del responsable del tratamiento o del cesionario amparado por dicha norma; b) El tratamiento o la cesión de los datos sean necesarios para que el responsable del tratamiento cumpla un deber que le imponga dicha norma.</p>'."\n";
              $txt .= '<p>En todo momento queda garantizado el ejercicio de los derechos de acceso, rectificación, cancelación, información y oposición, en los términos dispuestos en la legislación vigente. Por ello, de conformidad con lo dispuesto en la Ley Orgánica 15/1999, de Protección de Datos de Carácter Personal (LOPD) usted podrá ejercer sus derechos remitiendo una solicitud expresa, junto a una copia de su DNI, a nuestra dirección postal ('.b_f_option('user_address').') o bien por correo electrónico (<a href="mailto:'.b_f_option('user_email').'" title="Correo electrónico">'.b_f_option('user_email').'</a>)</p>'."\n";
              $txt .= '<p>Del mismo modo, el usuario podrá darse de baja de cualquiera de los servicios de suscripción para seguir recibiendo boletines informativos y comunicaciones comerciales remitiendo un e-mail con el asunto del mensaje “baja” a la dirección electrónica señalada.</p>'."\n";
              $txt .= '<h4>Principio del consentimiento</h4>'."\n";
              $txt .= '<p>El consentimiento para el tratamiento de sus datos con las finalidades descritas en el apartado anterior se entenderá prestado a través de la marcación de la casilla correspondiente dispuesta al efecto en nuestra página web.</p>'."\n";
              $txt .= '<h4>Carácter obligatorio de los datos solicitados</h4>'."\n";
              $txt .= '<p>La cumplimentación de todos y cada uno de los campos que aparecen en los formularios dispuestos al efecto en nuestra página web tiene carácter obligatorio (en caso contrario, aparecerán marcados con un asterisco los campos que tengan carácter obligatorio). La negativa a facilitar sus datos llevaría aparejada la imposibilidad del mantenimiento y cumplimiento de la relación del destinatario del servicio con nuestra entidad, ya que los mismos son necesarios para la prestación de servicios derivada de la misma.</p>'."\n";
              $txt .= '<h4></h4>'."\n";
              $txt .= '<p>El destinatario del servicio será el único responsable de la veracidad y exactitud de los datos aportados, actuando '.b_f_option('user_name').' de buena fé como mero prestador del servicio.</p>'."\n";
              $txt .= '<p>En el supuesto de que el destinatario del servicio facilite datos falsos o de terceras personas sin mediar su consentimiento para ello, responderá personalmente frente a '.b_f_option('user_name').', los afectados o interesados, Agencia Española de Protección de Datos y, en su caso, autoridades autonómicas de protección de datos, de las responsabilidades derivadas de dicha circunstancia.</p>'."\n";
              $txt .= '<p>'.b_f_option('user_name').' no recoge datos de personas menores de catorce años a través de su página web. En el supuesto de que una persona menor de catorce años facilite sus datos a través de los formularios dispuestos al efecto en nuestra página web o en cualquier otro canal de recogida de los mismos, se procederá a su destrucción inmediata en el mismo momento en que se tenga conocimiento de tal circunstancia.</p>'."\n";
              $txt .= '<p>Con la finalidad de dar cumplimiento a lo establecido en el artículo 4.3 de la LOPD, el destinatario del servicio se compromete a comunicar a '.b_f_option('user_name').' los cambios que se produzcan en sus datos, de forma que respondan con veracidad a su situación actual en todo momento.</p>'."\n";
              $txt .= '<h4>Herramientas de seguimiento de la navegación</h4>'."\n";
              $txt .= '<p>Nuestra página web puede utilizar herramientas de seguimiento de la navegación a través de la misma y dirección IP del destinatario del servicio, con la finalidad de mejorar y garantizar la prestación de servicios y el funcionamiento técnico de la misma.</p>'."\n";
              $txt .= '<h4>Principio de seguridad de los datos</h4>'."\n";
              $txt .= '<p>'.b_f_option('user_name').' se compromete al cumplimiento de su obligación de secreto respecto de los datos de carácter personal y de su deber de guardarlos y adoptará todas las medidas de índole técnica y organizativa necesarias que garanticen la seguridad de los datos de carácter personal y eviten su alteración, pérdida, tratamiento o acceso no autorizado, habida cuenta del estado de la tecnología, la naturaleza de los datos almacenados y los riesgos a que estén expuestos, ya provengan de la acción humana o del medio físico o natural, desarrolladas en el Título VIII del Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal.</p>'."\n";
              $txt .= '<h4>Propiedad intelectual e industrial</h4>'."\n";
              $txt .= '<p>El sitio web, incluyendo a título enunciativo pero no limitativo su programación, edición, compilación y demás elementos necesarios para su funcionamiento, los diseños, logotipos, texto y/o gráficos son propiedad del titular de la web. Todos los contenidos del sitio web se encuentran debidamente protegidos por la normativa de propiedad intelectual e industrial.</p>'."\n";
              $txt .= '<p>Independientemente de la finalidad para la que fueran destinados, la reproducción total o parcial, uso, explotación, distribución y comercialización, requiere en todo caso de la autorización escrita previa por parte del prestador. Cualquier uso no autorizado previamente por parte del prestador será considerado un incumplimiento grave de los derechos de propiedad intelectual o industrial del autor.</p>'."\n";
              $txt .= '<h4>Modificaciones y actualizaciones</h4>'."\n";
              $txt .= '<p>Debido a la propia naturaleza del presente portal web, el titular se reserva la potestad de realizar modificaciones y actualizaciones sobre la información contenida, así como la configuración, diseño y disponibilidad del propio portal en cualquier momento y sin necesidad de previo aviso.</p>'."\n";
              $txt .= '<h4>Ejercicio de derechos</h4>'."\n";
              $txt .= '<p>En cumplimiento de lo establecido en la LOPD y el Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la misma, el destinatario del servicio puede ejercitar, en cualquier momento, sus derechos de acceso, rectificación, cancelación y oposición ante el responsable del fichero o del tratamiento, adjuntando fotocopia de su DNI.</p>'."\n";
              $txt .= '<h4>Responsable del fichero o del tratamiento</h4>'."\n";
              $txt .= '<p>El responsable del fichero o del tratamiento es '.b_f_option('user_name').', con dirección a efectos de notificaciones en '.b_f_option('user_address').' y con email <a href="mailto:'.b_f_option('user_email').'" title="Correo electrónico">'.b_f_option('user_email').'</a></p>'."\n";
              $txt .= '</div>'."\n";

              echo $txt;

              ?>

					</div>
        </div>
				</article>

			<?php

			}
		}

		?>

	</div>
</div>

<?php

get_footer();

?>
