const btn_registro = document.querySelector("#button-agregar-cliente");
const modal_registro = document.querySelector("#modal_datos_generales");
const btn_cancelarRegistro = document.querySelector(".btn_cancelar");
const porElementos = document.querySelectorAll("input[type = 'text']");

btn_registro.addEventListener("click", () => {
  modal_registro.showModal();
});


const icon_error = document.querySelectorAll("#icoError");
//DATOS FORMULARIO PRIMERA PARTE
const txtnombresCliente = document.querySelector("#txtnombresCliente");
const txtxapellidoCliente = document.querySelector("#txtxapellidoCliente");
const txtcorreoCliente = document.querySelector("#txtcorreoCliente");
const txtfechaNacimiento = document.querySelector("#txtfechaNacimiento");
const txtxCUIC = document.querySelector("#txtxCUIC");
const txtEstatura = document.querySelector("#txtEstatura");
const txtTelefono = document.querySelector("#txtTelefono");
const txtsexo = document.querySelector("#txtsexo");
const edad = document.querySelector("#txtEdad");
const txtnombresEmergencia = document.querySelector("#txtnombresEmergencia");
const txtapellidosEmergencia = document.querySelector("#txtapellidosEmergencia");
const txttelefonoEmergencia = document.querySelector("#txttelefonoEmergencia");


const error_nombres = document.querySelector("#txtnombresCliente-error");
const error_apellidos = document.querySelector("#txtxapellidosCliente-error");
const error_correoCliente = document.querySelector("#txtcorreoCliente-error");
const error_Nacimiento = document.querySelector("#txtfechaNacimiento-error");
const error_cui = document.querySelector("#txtxcuic-error");
const error_estatura = document.querySelector("#txtEstatura-error");
const error_telefono = document.querySelector("#txtTelefono-error");
const error_sexo = document.querySelector("#sexo-error");
const error_edad = document.querySelector("#txtEdad-error");
const error_nombreEm = document.querySelector("#txtnombresEmergencia-error");
const error_apellidosEm = document.querySelector(
  "#txtapellidosEmergencia-error"
);
const error_TelEm = document.querySelector("#txttelefonoEmergencia-error");

//CARGAR EXTENSIONES NO. TELEFONO

const phoneInput = window.intlTelInput(txtTelefono, {
    preferredCountries: ["gt", "mx", "sv", "hn", "us"],
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
  
  const phoneInputEmergency = window.intlTelInput(txttelefonoEmergencia, {
    preferredCountries: ["gt", "mx", "sv", "hn", "us"],
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });



  let errores_DT = {
    txtnombresCliente: true,
    txtxapellidoCliente: true,
    txtcorreoCliente: true,
    txtfechaNacimiento: true,
    txtxCUIC: true,
    txtsexo: true,
    txtTelefono: true,
    txtEstatura: true,
    txtnombresEmergencia: true,
    txtapellidosEmergencia: true,
    txttelefonoEmergencia: true,
  };

  //CALCULAR EDAD 
  function calcularEdad(txtfechaNacimiento) {
    var hoy = new Date();
    var cumpleanos = new Date(txtfechaNacimiento);
    let edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
      edad--;
    }
  
    return edad;
  }
  
  window.addEventListener("load", function () {
    txtfechaNacimiento.addEventListener("change", function () {
      if (this.value) {
        edad.value = `${calcularEdad(this.value)}`;
        edad.style.fontWeight = "bold";
        edad.style.borderColor = "#00d333";
      }
    });
  });



  //PROGRESS BUTTON
const movPag = document.querySelector(".movPag");
const btn_adelante2 = document.querySelector(".sigPag");
const btn_atras1 = document.querySelector(".volver-pag1");
const btn_adelante3 = document.querySelector(".adelante-pag3");
const btn_atras2 = document.querySelector(".volver-pag2");
const btn_adelante4 = document.querySelector(".adelante-pag4");
const btn_atras3 = document.querySelector(".volver-pag3");
const btn_final = document.querySelector(".Fin");

const progressCheck = document.querySelectorAll(".progressbar__option .check");
const Siguiente = document.getElementById("btn_siguienteDT");
const btn_cancelarDatosG = document.querySelector("#btn_cancelarDatosG");
let progressOptions = document.querySelectorAll(".progressbar__option");
const Telc = document.querySelector("#telC");
const TelE = document.querySelector("#telE");


let cont = 1;

btn_adelante2.addEventListener("click", function (e) {
    movPag.style.marginLeft = "-16.67%";
    progressOptions[cont - 1].classList.add("active");
    cont += 1;
  });
  
  btn_adelante3.addEventListener("click", function (e) {
    e.preventDefault();
    movPag.style.marginLeft = "-33.33%";
    progressOptions[cont - 1].classList.add("active");
    cont += 1;
  });
  
  btn_adelante4.addEventListener("click", function (e) {
    e.preventDefault();
    movPag.style.marginLeft = "-50%";
    progressOptions[cont - 1].classList.add("active");
    cont += 1;
  });
  
  btn_final.addEventListener("click", function (e) {
    return false;
  });
  
  // BOTONES HACIA ATRAS
  btn_atras1.addEventListener("click", function (e) {
    e.preventDefault();
    movPag.style.marginLeft = "0%";
    progressOptions[cont - 2].classList.remove("active");
    cont -= 1;
  });
  
  btn_atras2.addEventListener("click", function (e) {
    e.preventDefault();
    movPag.style.marginLeft = "-16.67%";
    progressOptions[cont - 2].classList.remove("active");
    cont -= 1;
  });
  
  btn_atras3.addEventListener("click", function (e) {
    e.preventDefault();
    movPag.style.marginLeft = "-33.33%";
    progressOptions[cont - 2].classList.remove("active");
    cont -= 1;
  });
  
  btn_final.addEventListener("click", function (e) {
    return false;
  });





const validatefieldWhite = (contador, error, e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const field_id = e.target.id;
    if (fieldValue.trim().length === 0) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      error.innerHTML = "*Por favor llenar el campo";
      errores_DT[field_id] = true;
    } else {
      icon_error[contador].classList.remove("invalid-background-ico");
      field.style.borderColor = "#00d333";
      error.innerText = "";
      errores_DT[field_id] = false;
    }
  
    submitController();
  };
  
  const validatefield = (contador, error, e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const field_id = e.target.id;
    const regex = new RegExp(
      "^([A-ZÀ-ÅÇ-ÖÙ-Ý][a-zà-åç-öù-ÿ]+(?:[-' ][A-ZÀ-ÅÇ-ÖÙ-Ý][a-zà-åç-öù-ÿ]+)*)$"
    );
  
    if (fieldValue.trim().length === 0) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      errores_DT[field_id] = true;
      error.innerHTML = "*Por favor llenar el campo";
    } else if (!regex.test(fieldValue)) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      errores_DT[field_id] = true;
      error.innerHTML = "*Inicial Mayúscula, solo se permiten letras";
    } else {
      icon_error[contador].classList.remove("invalid-background-ico");
      field.style.borderColor = "#00d333";
      errores_DT[field_id] = false;
      error.innerText = "";
    }
    submitController();
  };

  
  const validateEmailB = (contador, error, e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const field_id = e.target.id;
    const regex = new RegExp("^(.*)@(gmail|googlemail|(.*.)google).com");
  
    if (fieldValue.trim().length === 0) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      errores_DT[field_id] = true;
      error.innerHTML = "*Por favor llenar el campo";
    } else if (!regex.test(fieldValue)) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      errores_DT[field_id] = true;
      error.innerHTML = "*No cumple como un correo válido";
    } else {
      icon_error[contador].classList.remove("invalid-background-ico");
      field.style.borderColor = "#00d333";
      errores_DT[field_id] = false;
      error.innerText = "";
    }
    if (fieldValue === "Ni") {
      icon_error[contador].classList.remove("invalid-background-ico");
      errores_DT[field_id] = false;
      field.style.borderColor = "#00d333";
      error.innerText = "";
    }
    submitController();
  };
  
  const validatefieldNumberFloat = (contador, med, error, e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const field_id = e.target.id;
    const regex = new RegExp("[0-9]+([.|,][0-9]+)?");
  
    if (fieldValue.trim().length === 0) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      errores_DT[field_id] = true;
      error.innerHTML = "*Por favor llenar el campo";
    } else if (!regex.test(fieldValue)) {
      icon_error[contador].classList.add("invalid-background-ico");
  
      errores_DT[field_id] = true;
      field.style.borderColor = "#ff004c";
      error.innerHTML = "Números enteros y decimales";
    } else {
      icon_error[contador].classList.remove("invalid-background-ico");
  
      errores_DT[field_id] = false;
      field.style.borderColor = "#00d333";
      error.innerText = "";
    }
    submitController();
  };
  
  const validatePhoneNumberI = (contador, TelI, error, phone, e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const field_id = e.target.id;
    const phone2 = phone.getNumber();
    if (phone.isValidNumber()) {
      icon_error[contador].classList.remove("invalid-background-ico");
      field.style.borderColor = "#00d333";
      error.innerHTML = "";
      errores_DT[field_id] = false;
    } else if (fieldValue.trim().length === 0) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      error.innerHTML = "*Por favor llenar el campo";
      errores_DT[field_id] = true;
    } else {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      error.innerText = "Número Invalido";
      errores_DT[field_id] = true;
    }
  
    if (fieldValue === "Ni") {
      icon_error[contador].classList.remove("invalid-background-ico");
      field.style.borderColor = "#00d333";
      error.innerHTML = "";
      errores_DT[field_id] = false;
    }
    submitController();
    TelI.value = phone2;
  };
  
  const validateSelect = (contador, error, e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const field_id = e.target.id;
    if (fieldValue === -1) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      errores_DT[field_id] = true;
      error.innerHTML = "*Por favor seleccionar sexo";
    } else {
      icon_error[contador].classList.remove("invalid-background-ico");
      field.style.borderColor = "#00d333";
      errores_DT[field_id] = false;
      error.innerText = "";
    }
    submitController();
  };
  
  const validatefieldCUI = (contador, error, e) => {
    const field = e.target;
    const fieldValue = e.target.value;
    const field_id = e.target.id;
    const regex = new RegExp("^[1-9]{1}[0-9]{3}\\s?[0-9]{5}\\s?[0-9]{4}$");
  
    if (fieldValue.trim().length === 0) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      errores_DT[field_id] = true;
      error.innerHTML = "*Por favor llenar el campo";
    } else if (!regex.test(fieldValue)) {
      icon_error[contador].classList.add("invalid-background-ico");
      field.style.borderColor = "#ff004c";
      errores_DT[field_id] = true;
      error.innerHTML = "*Inicial Mayúscula, solo se permiten letras";
    } else {
      icon_error[contador].classList.remove("invalid-background-ico");
      field.style.borderColor = "#00d333";
      errores_DT[field_id] = false;
      error.innerText = "";
    }
    submitController();
  };
  
    
  txtnombresCliente.addEventListener("blur", (e) =>
    validatefield(0, error_nombres, e)
  );
  
  txtnombresCliente.addEventListener("input", (e) =>
    validatefield(0, error_nombres, e)
  );
  txtxapellidoCliente.addEventListener("blur", (e) =>
    validatefield(1, error_apellidos, e)
  );
  
  txtxapellidoCliente.addEventListener("input", (e) =>
    validatefield(1, error_apellidos, e)
  );
  txtcorreoCliente.addEventListener("blur", (e) =>
    validateEmailB(2, error_correoCliente, e)
  );
  txtcorreoCliente.addEventListener("input", (e) =>
    validateEmailB(2, error_correoCliente, e)
  );
  
  txtfechaNacimiento.addEventListener("click", (e) =>
    validatefieldWhite(3, error_Nacimiento, e)
  );
  txtfechaNacimiento.addEventListener("change", (e) =>
    validatefieldWhite(3, error_Nacimiento, e)
  );
  txtxCUIC.addEventListener("input", (e) => validatefieldCUI(4, error_cui, e));
  txtxCUIC.addEventListener("blur", (e) => validatefieldCUI(4, error_cui, e));
  
  txtsexo.addEventListener("click", (e) => validateSelect(5, error_sexo, e));
  txtsexo.addEventListener("change", (e) => validateSelect(5, error_sexo, e));
  
  txtTelefono.addEventListener("blur", (e) =>
    validatePhoneNumberI(6, Telc, error_telefono, phoneInput, e)
  );
  
  txtTelefono.addEventListener("input", (e) =>
    validatePhoneNumberI(6, Telc, error_telefono, phoneInput, e)
  );
  
  txtEstatura.addEventListener("blur", (e) =>
    validatefieldNumberFloat(8, 0, error_estatura, e)
  );
  txtEstatura.addEventListener("input", (e) =>
    validatefieldNumberFloat(8, 0, error_estatura, e)
  );
  
  txtnombresEmergencia.addEventListener("blur", (e) =>
    validatefield(9, error_nombreEm, e)
  );
  txtnombresEmergencia.addEventListener("input", (e) =>
    validatefield(9, error_nombreEm, e)
  );
  
  txtapellidosEmergencia.addEventListener("blur", (e) =>
    validatefield(10, error_apellidosEm, e)
  );
  
  txtapellidosEmergencia.addEventListener("input", (e) =>
    validatefield(10, error_apellidosEm, e)
  );
  
  txttelefonoEmergencia.addEventListener("blur", (e) =>
    validatePhoneNumberI(11, TelE, error_TelEm, phoneInputEmergency, e)
  );
  
  txttelefonoEmergencia.addEventListener("input", (e) =>
    validatePhoneNumberI(11, TelE, error_TelEm, phoneInputEmergency, e)
  );


  //DESMARCAR SELECT (SEXO)

  window.addEventListener("load", function () {
    txtsexo.addEventListener("change", function () {
      if (this.value === "1") {
        ocultarS[0].style.display = "none";
        ocultarS[1].style.display = "none";
        ocultarS[2].style.display = "none";
        ocultarS[3].style.display = "none";
      } else {
        ocultarS[0].style.display = "";
        ocultarS[1].style.display = "";
        ocultarS[2].style.display = "";
        ocultarS[3].style.display = "";
      }
    });
  });

  //VERIFICAR INPUTS
  submitController = () => {
    if (
      errores_DT.txtnombresCliente ||
      errores_DT.txtxapellidoCliente ||
      errores_DT.txtcorreoCliente ||
      errores_DT.txtfechaNacimiento ||
      errores_DT.txtxCUIC ||
      errores_DT.txtsexo ||
      errores_DT.txtTelefono ||
      errores_DT.txtnombresEmergencia ||
      errores_DT.txtapellidosEmergencia ||
      errores_DT.txttelefonoEmergencia
    ) {
      Siguiente.toggleAttribute("disabled", false);
    } else {
      Siguiente.toggleAttribute("disabled", false);
    }
  };


///CONDICIONES
// SALUD EN GENERAL
const allStars_salud = document.querySelectorAll(".star-salud");
let rating_salud = document.querySelector(".rating-salud");
MarcarEstrella(allStars_salud, rating_salud);
const defaultEstrella = "Click";
const OpcionesEstrella = {
  1: "Muy Mala",
  2: "Mala",
  3: "Regular",
  4: "Buena",
  5: "Excelente",
};

function MarcarEstrella(estrella, txtEstrella) {
  estrella.forEach((star, i) => {
    star.addEventListener("click", function (e) {
      e.preventDefault();
      let current_star_level = i + 1;
      const opcion = OpcionesEstrella[current_star_level] || defaultEstrella;
      txtEstrella.value = opcion;
      estrella.forEach((star, j) => {
        if (current_star_level >= j + 1) {
          star.innerHTML = "&#10030;";
        } else {
          star.innerHTML = "&#9734";
        }
      });
    });
  });
}

// CONDICIÓN FISICA
const allStarsFisico = document.querySelectorAll(".star-fisico");
let rating_fisico = document.querySelector(".rating-fisico");
MarcarEstrella(allStarsFisico, rating_fisico);

// CONDICIÓN NUTRICIONAL
const allStarsNutricion = document.querySelectorAll(".star-nutricion");
let rating_nutricion = document.querySelector(".rating-nutricion");
MarcarEstrella(allStarsNutricion, rating_nutricion);

// NIVEL DE ESTRESS
const allStarsEstres = document.querySelectorAll(".star-estres");
let rating_estres = document.querySelector(".rating-estres");
MarcarEstrella(allStarsEstres, rating_estres);


//Enviar datos
var frm = $("#form_datosg");

frm.submit(function (e) {
  e.preventDefault();

  $.ajax({
    type: frm.attr("method"),
    url: frm.attr("action") + "?accion=insertar_cliente",
    data: frm.serialize(),

    success: function (data) {
      let error = data;
      if (error == 0 || error === null) {
        modalDatosGenerales.close();
        Swal.fire({
          title: "Error",
          text: "Vaya, algo ha ocurrido mal",
          icon: "error",
          confirmButtonColor: "#ff004c",
        }).then(function () {
          window.location.replace("Modulos?modulo=registros");
        });
      } else {
        modalDatosGenerales.close();
        Swal.fire({
          title: "Excelente!!",
          text: "Cliente creado correctamente",
          icon: "success",
          confirmButtonColor: "#008d49",
        }).then(function () {
          traerDatos(error);
        });
        //
      }
    },
    error: function (data) {},
  });
});

 
  // ULTIMA PARTE DE TODO

// sdasd

btn_cancelarRegistro.addEventListener("click", (e) => {
    e.preventDefault();
    console.log(porElementos);
    Swal.fire({
      target: document.querySelector("#modal_datos_generales"),
      title: "¿Desea cancelar el registro?",
      text: "Se perderán los datos, si es que ya llenó algunos.",
      icon: "info",
      background: "#ffffff",
      showCancelButton: true,
      confirmButtonColor: "#0072ff",
      cancelButtonColor: "#D2122E",
      cancelButtonText: "Cancelar",
      confirmButtonText: "Sí, deseo salir",
    }).then((result) => {
      if (result.value) {
        modal_registro.close();
        LimpiarTodo();
        document.getElementById("form_datosg").reset();
      
      }
    });
  });
  

  function LimpiarTodo() {
    limpiarInputs();
    LimpiarColor();
    ColorIcon();
  }
  
  function limpiarInputs() {
    txtsexo.value = -1;
    error_nombres.innerHTML = "";
    error_apellidos.innerHTML = "";
    error_correoCliente.innerHTML = "";
    error_Nacimiento.innerHTML = "";
    error_cui.innerHTML = "";
    txtEstatura.innerHTML = "";
    error_estatura.innerHTML = "";
    error_telefono.innerHTML = "";
    error_sexo.innerHTML = "";
    error_edad.innerHTML = "";
    error_nombreEm.innerHTML = "";
    error_apellidosEm.innerHTML = "";
    error_TelEm.innerHTML = "";
  }
  
  function LimpiarColor() {
    txtnombresCliente.style.borderColor = "#515151";
    txtxapellidoCliente.style.borderColor = "#515151";
    txtcorreoCliente.style.borderColor = "#515151";
    txtfechaNacimiento.style.borderColor = "#515151";
    txtxCUIC.style.borderColor = "#515151";
    txtEstatura.style.borderColor = "#515151";
    txtTelefono.style.borderColor = "#515151";
    txtsexo.style.borderColor = "#515151";
    edad.style.borderColor = "#515151";
    txtnombresEmergencia.style.borderColor = "#515151";
    txtapellidosEmergencia.style.borderColor = "#515151";
    txttelefonoEmergencia.style.borderColor = "#515151";
  }
  
  function ColorIcon() {
    for (let i = 0; i < icon_error.length; i++) {
      icon_error[i].classList.replace(
        "invalid-background-ico",
        "border-colorIcon"
      );
    }
  }
  