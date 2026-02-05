

document.addEventListener("DOMContentLoaded", () => {
  const el = document.querySelector("#calendar-test");
  if (!el) return;
 new AirDatepicker(el, {
  inline: true,
  locale: AirDatepicker.locale.fr,
  firstDay: 1,
  
});
});

