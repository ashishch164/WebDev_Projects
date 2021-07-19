const numItemsToGenerate = 1; 

function renderItem(){
  fetch(`https://source.unsplash.com/1600x900/?mountains`).then((response)=> {   
    let item = document.createElement('div');
    item.classList.add('item');
    item.innerHTML = `
      <img class="beach-image" src="${response.url}" alt="beach image"/>
    `     
    document.body.appendChild(item);
  }) 
}
for(let i=0;i<numItemsToGenerate;i++){
  renderItem();
}