$('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true,
  gutter: '.gutter-sizer',
});



var form = $("#form");

form.steps({
  headerTag: "h5",
  transitionEffect: "slide",
  bodyTag: "div",
  contentContainerTag: "div",
  actionContainerTag: "div",
  stepsContainerTag: "div",
  titleTemplate: '<span class="step">#index#</span> #title#',
  labels: {
    cancel:"Odustanite",
    current:"",
    finish:"Pošaljite",
    next:"Sledeći korak",
    previous:"Prethodni korak",
    loading:"Učitavanje...",
  }
});


  