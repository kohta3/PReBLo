var SelectPref = document.querySelector('#PrefSelection');
var SelectCity = document.getElementById('child');
SelectPref.addEventListener('change',(event) => {  
    var SelPref = SelectPref.value;
    while( SelectCity.firstChild ){
      SelectCity.removeChild( SelectCity.firstChild );
    }
    for (let index = 0; index < 1747; index++){
        if(CityToScript[index]!==null){
          var city = CityToScript[index];
        };
      console.log(Object.keys(city));
      let cityOfPref=Object.keys(city)[0];
      if(cityOfPref!==null){
        if (cityOfPref===SelPref){
          var test = '<option value="'+ city[cityOfPref] + '">' + city[cityOfPref] + "</option>";
          SelectCity.insertAdjacentHTML('beforeend',test);
        };
      }
    };
});





const sizeLimit = 1024 * 1024 * 1;　// 制限サイズ
const fileInput = document.getElementById('add-file'); // input要素
// changeイベントで呼び出す関数
const handleFileSelect = () => {
  const files = fileInput.files;
  for (let i = 0; i < files.length; i++) {
    if (files[i].size > sizeLimit) {
      // ファイルサイズが制限以上
      alert('ファイルサイズは1MB以下にしてください'); // エラーメッセージを表示
      fileInput.value = ''; // inputの中身をリセット
      return; // この時点で処理を終了する
    }
  }
}
// フィールドの値が変更された時（≒ファイル選択時）に、handleFileSelectを発火
fileInput.addEventListener('change', handleFileSelect);
