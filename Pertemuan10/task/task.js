const persiapanWuduk = () => {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve("persiapanWuduk..");
    }, 1000);
  });
};
const bagianMuka = () => {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve("bagianMuka");
    }, 2000);
  });
};
const bagaianTangan = () => {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve("bagaianTangan");
    }, 2000);
  });
};
const usapRambut = () => {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve("usapRambut....");
    }, 3000);
  });
};
const basuhTelinga = () => {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve("basuhTelinga....");
    }, 3000);
  });
};
const basuhKaki = () => {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve("basuhKaki....");
    }, 3000);
  });
};

// consuming await vs promise

const main = async () => {
  console.log(await persiapanWuduk());
  console.log(await bagianMuka());
  console.log(await bagaianTangan());
  console.log(await usapRambut());
  console.log(await basuhTelinga());
  console.log(await basuhKaki());
};

main();
