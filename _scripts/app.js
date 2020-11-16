window.addEventListener("DOMContentLoaded", (_e) => {
  let stage = document.getElementById("stage");
  let slideComplete = (e) => {
    stage.appendChild(arr[0]);
  };
  let arr = stage.getElementsByTagName("p");
  for (let i = 0; i < arr.length; i++) {
    arr[i].addEventListener("animationend", slideComplete, false);
  }
}, false);