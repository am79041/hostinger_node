const video_btn = document.querySelector("#searchVideo");
const image_btn = document.querySelector("#searchImage");
const dp_btn = document.querySelector("#searchDP");
const car_btn = document.querySelector("#searchCarousel");
const igtv_btn = document.querySelector("#searchIGTV");

const table = document.querySelector("#mytable");
const area = document.querySelector("#dArea");
const errMsg = document.querySelector("#errorMessage");

const clearInput = () => {
  document.querySelector("#input").value = "";
};

const getInput = () => {
  let inputLink = document.querySelector("#input").value;
  let modLink = inputLink.toString().split("?");
  let finalLink = modLink[0];
  return finalLink;
};

const getSingle = ({ data, key }) => {
  let r1 = table.insertRow();
  let r2 = table.insertRow();

  document.getElementById("spinner").style = "display:none";

  switch (key) {
    case "video":
      let video = document.createElement("video");
      video.controls = true;
      video.setAttribute("id", "renderMedia");
      video.src = `data:video/mp4;base64, ${data}`;
      r1.appendChild(video);

      let av = document.createElement("a");
      av.type = "button";
      av.setAttribute("class", "btn btn-primary mt-2 mb-4");
      av.href = `data:video/mp4;base64, ${data}`;
      av.download = "video.mp4";
      av.innerText = "Download";
      r2.appendChild(av);
      break;

    case "image":
      let image = document.createElement("img");
      image.setAttribute("id", "renderMedia");
      image.src = `data:image/png;base64, ${data}`;
      r1.appendChild(image);

      let ap = document.createElement("a");
      ap.type = "button";
      ap.setAttribute("class", "btn btn-primary mt-2 mb-2");
      ap.href = `data:image/png;base64, ${data}`;
      ap.download = "image.png";
      ap.innerText = "Download";
      r2.appendChild(ap);
      break;
  }
};

const getVideo = async () => {
  const link = getInput();
  const key = "video";
  try {
    const obj = await getData({ link: link, key: key });
    obj.data && getSingle({ data: obj.data, key: key });
  } catch (error) {
    console.log("NaN");
  }
};

const getDP = async () => {
  const username = getInput();
  const link = "https://instagram.com/" + username;
  try {
    const obj = await getData({
      link: link,
      key: "dp",
    });
    obj.data && getSingle({ data: obj.data, key: "image" });
  } catch (error) {
    console.log("NaN");
  }
};

const getImage = async () => {
  const link = getInput();
  const key = "image";
  try {
    const obj = await getData({ link: link, key: key });
    obj.data && getSingle({ data: obj.data, key: key });
  } catch (error) {
    console.log("NaN");
  }
};

const getCarousel = async () => {
  const link = getInput();
  const key = "carousels";
  try {
    const ar = await getData({ link: link, key: key });
    ar.map((e) => {
      return e.data && getSingle({ data: e.data, key: "image" });
    });
  } catch (error) {
    console.log("NaN");
  }
};

const getData = async ({ link, key }) => {
  table.innerHTML = "";
  errMsg.innerText = "";
  document.getElementById("spinner").style = "display:block";
  clearInput();
  try {
    const response = await axios.post("../action.php", {
      url: link,
      key: key,
    });
    console.log(response.data);
    if (response.data && response.data !== "404! Url Not Found")
      return response.data;
    else {
      document.getElementById("spinner").style = "display:none";
      errMsg.innerText = "Please Check Your URL Once Or Try again later...";
      return null;
    }
  } catch (error) {
    console.log("NaN");
  }
};

const randomTxt = document.querySelector("#randomText");
const randomBtn = document.querySelector("#randomBtn");

video_btn && video_btn.addEventListener("click", getVideo);
dp_btn && dp_btn.addEventListener("click", getDP);
image_btn && image_btn.addEventListener("click", getImage);
car_btn && car_btn.addEventListener("click", getCarousel);
igtv_btn && igtv_btn.addEventListener("click", getVideo);
