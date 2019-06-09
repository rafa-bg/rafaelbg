import $ from 'jquery';
import validate from '../../../../../node_modules/jquery-validation/dist/jquery.validate.min';

class Validaciones {
	constructor() {
		this.forma = $('#formulario');
		this.input = $('.formulario__input');
		this.textarea = $('.formulario__textarea');
		this.boton = $('.formulario__boton');
		this.validar();
		this.enviar();
	}

	validar() {
		this.forma.validate({
		  ignore: ".ignore",
		    rules: {
		      nombre: {
		        required:true
		      },
		      correoelectronico: {
		        required:true,
		        email: true,
		      },
		      telefono: {
		        required: true,
		      },
		      mensaje: {
		        required: true,
		      },
		      hiddenRecaptcha: {
		        required: function () {
		          if (grecaptcha.getResponse() == '') {
		              return true;
		          } else {
		              return false;
		          }
		        }
		      }
		    },
		    messages: {
		      nombre: {
		        required: '',
		      },
		      correoelectronico: {
		        required: '',
		        email: ''
		      },
		      telefono: {
		        required: '',
		      },
		      mensaje: {
		        required: '',
		      },
		      hiddenRecaptcha: {
		        required: '¿Tengo que aplicarte un test de Voight-kampff?',
		       },
		    },

		    highlight: function(element) {
		        $(element).css('box-shadow', 'rgba(213, 0, 87, 0.5) 0px 0px 0px 2px inset');
		      },

		    unhighlight: function(element) {
		        $(element).css('box-shadow', 'none');
		    }
		});
	}

	enviar() {
		var that = this;
		this.forma.submit(function(e){
			if (that.forma.valid()) 
			{
			  $.ajax( {
			          url: magicalData.siteURL + '/php/mail.php',
			          type: 'POST',
			          data: new FormData( this ),
			          processData: false,
			          contentType: false,
			          success:function(data) {
			              that.input.val('');
			              that.textarea.val('');
			              that.boton.val("Mensaje enviado.");
			              that.boton.css("cursor", "not-allowed");
			            },
			            error: function(data) {
			              that.input.val('');
			              that.input.textarea('');
			              that.boton.removeAttr( 'disabled');
			              that.boton.val('El mensaje no fue enviado.');
			              that.boton.css("pointer-events", "none");
			            }

			          });
			    e.preventDefault();
			    that.boton.attr('disabled', 'disabled');
			    that.boton.val("Enviando...");
			    that.boton.css("pointer-events", "none");
			 }
		});
	}
}


export default Validaciones;