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




// function previewFile(file) {
//     // プレビュー画像を追加する要素
//     const preview = document.getElementById('preview');
  
//     // FileReaderオブジェクトを作成
//     const reader = new FileReader();
  
//     // ファイルが読み込まれたときに実行する
//     reader.onload = function (e) {
//       const imageUrl = e.target.result; // 画像のURLはevent.target.resultで呼び出せる
//       const img = document.createElement("img"); // img要素を作成
//       img.src = imageUrl; // 画像のURLをimg要素にセット
//       preview.appendChild(img); // #previewの中に追加
//     }
  
//     // いざファイルを読み込む
//     reader.readAsDataURL(file);
//   }
  
  
//   // <input>でファイルが選択されたときの処理
//   const fileInput = document.getElementById('add-file');
//   const handleFileSelect = () => {
//     const files = fileInput.files;
//     for (let i = 0; i < files.length; i++) {
//       previewFile(files[i]);
//     }
//   }
//   fileInput.addEventListener('change', handleFileSelect);