// import HttpReq from "./axios";

const env = import.meta.env;
const isLive = env.MODE === "production";

const Helper = {
  env,
  api: isLive ? env.VITE_API : env.VITE_DEV_API,
  asset: isLive ? env.VITE_ASSET : env.VITE_DEV_ASSET,

  v1: "/v1",

  isLive,

  // http: new HttpReq(),

  categoryBaseUrl: "/products",
  productBaseUrl: "products",

  filterValues: ({ options, param }) => {
    let filtered = [];

    options = typeof options === "object" ? Object.values(options) : options;

    options.map(
      (option) =>
        (filtered = [
          ...filtered,
          {
            label:
              typeof param.label === "string"
                ? option[param.label]
                : param.label(option),
            value: option[param.value],
          },
        ])
    );
    return filtered;
  },

  // Capitalize first letter
  ucwords: (info) => {
    if (info) {
      let splitted = info.split("");

      let first = splitted[0].toUpperCase();
      let end = splitted.slice(1);

      return first.concat(end.toString().replaceAll(",", ""));
    }
  },

  // Capitalize first letter
  capitalizeEachWord: (info, param = " ") => {
    if (info) {
      let splitted = info.split(param);
      let words = "";

      splitted.forEach((spl) => {
        let word = `${spl.charAt(0).toUpperCase()}${spl.substring(1)} `;

        words = words.concat(word);
      });

      return words;
    }
  },

  slugify: (text) => {
    text = text.split(" ");
    return text.join("-");
  },

  textShortener: (text, start, end, length) => {
    if (text.length > end) {
      const sliced = text.slice(start, end);
      return sliced + "...";
    }
    return text;
  },

  tinyImageProcessing: (cb, value, meta) => {
    const uploader = document.createElement("input");
    uploader.setAttribute("type", "file");
    uploader.setAttribute("accept", "image/*");

    uploader.addEventListener("change", ({ target: { files } }) => {
      const file = files[0];

      const reader = new FileReader();

      reader.addEventListener("load", () => {
        const id = "blobid" + new Date().getTime();
        const blobCache = tinymce.activeEditor.editorUpload.blobCache;
        const base64 = reader.result.split(",")[1];
        const blobInfo = blobCache.create(id, file, base64);

        blobCache.add(blobInfo);

        cb(blobInfo.blobUri(), { title: file.name });
      });

      reader.readAsDataURL(file);
    });

    uploader.click();
  },

  generateToken: (length) =>
    Math.random()
      .toString(36)
      .substring(length ?? 10),

  home: (status) => (status ? "/management/slider" : "/login"),

  routeException: ["/login", "/forgot-password", "/reset-password"],
};

export default Helper;
