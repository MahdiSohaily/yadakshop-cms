function convertToPersian(element) {
  // Define a mapping of English keyboard keys to Persian characters
  const persianCharMap = {
    a: "ش",
    b: "ذ",
    c: "ز",
    d: "ی",
    e: "ث",
    f: "ب",
    g: "ل",
    h: "ا",
    i: "ه",
    j: "ت",
    k: "ن",
    l: "م",
    m: "پ",
    n: "د",
    o: "خ",
    p: "ح",
    q: "ض",
    r: "ق",
    s: "س",
    t: "ف",
    u: "ع",
    v: "ر",
    w: "ص",
    x: "ط",
    y: "غ",
    z: "ظ",
    ",": "و",
    "'": "گ",
    ";": "ک",
    "]": "چ",
    1: "۱",
    2: "۲",
    3: "۳",
    4: "۴",
    5: "۵",
    6: "۶",
    7: "۷",
    8: "۸",
    9: "۹",
    0: "۰",
  };
  const customInput = element;
  let customText = "";
  const inputText = customInput.value.toLowerCase();
  for (let i = 0; i < inputText.length; i++) {
    const char = inputText[i];
    if (char in persianCharMap) {
      customText += persianCharMap[char];
    } else {
      customText += char;
    }
  }
  customInput.value = customText;
}

function convertToEnglish(element) {
  const englishCharMap = {
    ش: "a",
    ذ: "b",
    ز: "c",
    ی: "d",
    ث: "e",
    ب: "f",
    ل: "g",
    ا: "h",
    ه: "i",
    ت: "j",
    ن: "k",
    م: "l",
    پ: "m",
    د: "n",
    خ: "o",
    ح: "p",
    ض: "q",
    ق: "r",
    س: "s",
    ف: "t",
    ع: "u",
    ر: "v",
    ص: "w",
    ط: "x",
    غ: "y",
    ظ: "z",
    و: ":",
    گ: "'",
    ک: ";",
    چ: "]",
    "۱": "1",
    "۲": "2",
    "۳": "3",
    "۴": "4",
    "۵": "5",
    "۶": "6",
    "۷": "7",
    "۸": "8",
    "۹": "9",
    "۰": "0",
  };

  const customInput = element;
  let customText = "";
  const inputText = customInput.value.toLowerCase();
  for (let i = 0; i < inputText.length; i++) {
    const char = inputText[i];
    if (char in englishCharMap) {
      customText += englishCharMap[char];
    } else {
      customText += char;
    }
  }
  customInput.value = customText;
}

function toggleSidebar() {
  const sidebar = document.querySelector("#sidebar");
  sidebar.classList.toggle("active");
}
