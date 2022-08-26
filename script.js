const STORAGE_KEY = 'HISTORI_DIAGNOSA';

const DATA_ITEMID = 'itemId';

let data = [];

function isStorageExist() {
  if (typeof Storage === undefined) {
    alert('Your browser not support web storage');
    return false;
  }
  return true;
}

function saveData() {
  const parsed = JSON.stringify(data);
  localStorage.setItem(STORAGE_KEY, parsed);
  document.dispatchEvent(new Event('ondatasaved'));
}

function updateDataToStorage() {
  if (isStorageExist()) {
    saveData();
  }
}

function loadDataFromStorage() {
  const serializeData = localStorage.getItem(STORAGE_KEY);
  let item = JSON.parse(serializeData);
  if (item !== null) {
    data = item;
  }

  document.dispatchEvent(new Event('ondataloaded'));
}

function composeDataObject(nama, hasil, ogtt, dbp, ins, bmi, age) {
  var dateObj = new Date();
  var month = dateObj.getUTCMonth() + 1;
  var day = dateObj.getUTCDate();
  var year = dateObj.getUTCFullYear();
  return {
    id: +new Date().getTime(),
    nama,
    hasil,
    ogtt,
    dbp,
    ins,
    bmi,
    age,
    date: day + '/' + month + '/' + year,
  };
}

function refreshDataFromData() {
  const dataContainer = document.getElementById('tabel-histori');
  for (item of data) {
    const newData = makeData(
      item.nama,
      item.hasil,
      item.ogtt,
      item.dbp,
      item.ins,
      item.bmi,
      item.age,
      item.date
    );
    newData[DATA_ITEMID] = item.id;

    dataContainer.append(newData);
  }
}
