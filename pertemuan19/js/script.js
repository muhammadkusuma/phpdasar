let keyword=document.getElementById('keyword');
let tombolCari=document.getElementById('tombol-cari');
let container=document.getElementById('container');

keyword.addEventListener('keyup',function(){
    //buat object ajax
    let xhr=new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange=function(){
        if(xhr.readyState==4 && xhr.status==200){
            container.innerHTML=xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('GET','ajax/ajax_cari.php?keyword='+keyword.value,true);
    // xhr.open('GET','ajax/coba.txt',true);
    xhr.send();
});