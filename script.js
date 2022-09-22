let amountTickets = document.querySelectorAll('select#dropdown');
let contents;

for (let j = 0; j < amountTickets.length; j++) {
    for (let i = 1; i <= 100; i++) {
        contents += '<option>' + i + '</option>';
    }
    amountTickets[j].innerHTML += contents;
}

const ratingStars = [...document.getElementsByClassName("rating-star")];

function executeRating(stars, result) {
   const starClassActive = "rating-star active";
   const starClassUnactive = "rating-star inactive";
   const starsLength = stars.length;
   let i;
   stars.map((star) => {
      star.onclick = () => {
         i = stars.indexOf(star);

         if (star.className.indexOf(starClassUnactive) !== -1) {
            console.log('hello');
            for (i; i >= 0; --i) stars[i].className = starClassActive;
         } else {
            console.log('bye');
            for (i; i < starsLength; ++i) stars[i].className = starClassUnactive;
         }
      };
   });
}

executeRating(ratingStars);