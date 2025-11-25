async function QwesCore(url) {
  try {
    const response = await fetch(url);
    if (!response.ok) throw new Error(`Ошибка получения данных: ${response.status}`);
    const veiw = await response.text();
    document.getElementById('app').innerHTML = veiw;
  } catch ($e) {
    throw new Error($e);
  }
}

QwesCore('https://raw.githubusercontent.com/timqwees/QweesCore/view/main/index.php');
// QwesCore('/public/pages/main/test.php');

const conf = {
  distantion: 30,
  view: {
    '0': '0rem',
    '10': '10rem',
    '-10': '-10rem'
  },
};

function checkBlocksVisibility() {
  const windowHeight = window.innerHeight;
  const view = document.querySelectorAll('.View, .view');
  const viewLeft = document.querySelectorAll('.viewLeft, .viewleft');
  const viewRight = document.querySelectorAll('.viewRight, .viewright');

  view.forEach(element => {
    const viewHeight = element.getBoundingClientRect().top;
    if (viewHeight < windowHeight - conf.distantion) {
      element.style.opacity = '1';
      element.style.transform = `translateY(${conf.view['0']})`;
    } else {
      element.style.opacity = '0';
      element.style.transform = `translateY(${conf.view['10']})`;
    }
  });
  viewLeft.forEach(element => {
    const viewHeight = element.getBoundingClientRect().top;
    if (viewHeight < windowHeight - conf.distantion) {
      element.style.opacity = '1';
      element.style.transform = `translateX(${conf.view['0']})`;
    } else {
      element.style.opacity = '0';
      element.style.transform = `translateX(${conf.view['-10']})`;
    }
  });
  viewRight.forEach(element => {
    const viewHeight = element.getBoundingClientRect().top;
    if (viewHeight < windowHeight - conf.distantion) {
      element.style.opacity = '1';
      element.style.transform = `translateX(${conf.view['0']})`;
    } else {
      element.style.opacity = '0';
      element.style.transform = `translateX(${conf.view['10']})`;
    }
  });
}

checkBlocksVisibility();

window.addEventListener('scroll', checkBlocksVisibility);
