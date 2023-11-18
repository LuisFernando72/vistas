const dt = new DataTable("#datatable", [
  {
    id: "button-agregar-cliente",
    text: "Agregar Cliente",
    icon: "fa-solid fa-user-plus",
    action: function () {
      
    },
  },

  {
    id: "button-agregar-reporte",
    text: "Agregar Reporte",
    icon: "fa-solid fa-folder-plus",
    action: function () {
    //   const modal_detalle = document.querySelector("#modal_control_cliente");
    //   const id = dt.selected[0].values[1];

    //   modal_detalle.showModal();
    },
  },

  {
    id: "button-actualizar-cliente",
    text: "Actualizar Cliente",
    icon: "fa-solid fa-pen-to-square",
    action: function () {
    //   const modal_ModCliente = document.querySelector("#ModalModificarCliente");

    //   modal_ModCliente.showModal();
    },
  },

  {
    id: "button-eliminar-cliente",
    text: "Control Medidas",
    icon: "fa-solid fa-ruler",
    action: function () {},
  },

  {
    id: "button-ver-reporte",
    text: "Ver Reporte",
    icon: "fa-sharp fa-solid fa-folder-open",
    action: function () {},
  },
]);

dt.parse();

// console.log( dt.getSelected());
