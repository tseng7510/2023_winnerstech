function lightBox(elm) {
  let body = document.querySelector('body');

  let list = document.querySelectorAll(elm);
  let outLightBox;
  let closeLightBoxBtn;

  list.forEach((s, i) => {
    // 開啟燈箱
    s.addEventListener('click', function (e) {
      outLightBox = document.createElement('div');
      outLightBox.className = 'outLightBox';
      let lightBox = document.createElement('div');
      lightBox.className = 'lightBox';
      closeLightBoxBtn = document.createElement('button');
      closeLightBoxBtn.className = 'closeLightBoxBtn';
      lightBox.append(closeLightBoxBtn);
      outLightBox.append(lightBox);
      body.append(outLightBox);

      let videoSrc = s.dataset.src.substr(32);

      body.classList.add('lightBoxOpen');
      lightBox.innerHTML += `<iframe src="https://www.youtube.com/embed/${videoSrc}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>`;

      closeLightBoxBtn.addEventListener('click', closeLightBox);
      outLightBox.addEventListener('click', function (e) {
        e.stopPropagation();
        console.log(e);
        closeLightBox();
      });
    });
  });

  // 關閉燈箱

  function closeLightBox() {
    let outLightBox = document.querySelector('.outLightBox');

    body.classList.add('lightBoxClose');
    let closeLightBox = document.querySelector('.lightBoxClose .outLightBox');

    closeLightBox.addEventListener('animationend', closeLightBoxBody);
    function closeLightBoxBody() {
      body.classList.remove('lightBoxClose');
      body.classList.remove('lightBoxOpen');
      outLightBox.remove();
      // 避免開啟燈箱的css動畫影響，每次關閉時清除偵聽
      closeLightBox.removeEventListener('animationend', closeLightBoxBody);
    }
  }
}
