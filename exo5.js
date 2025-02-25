class movie
{
    constructor(titre,Année_de_sortie,le_Producteur,movie_id)
    {
        this.titre=titre;
        this.Année_de_sortie=Année_de_sortie;
        this.le_Producteur=le_Producteur;
        this.movie_id=movie_id;
        
    }
    see_more()
    {
        console.log("titre"+this.titre+",Année_de_sortie"+this.Année_de_sortie+",le_Producteur"+this.le_Producteur);
        let paragarph=document.createElement("p");
        paragarph.innerHTML=("titre"+this.titre+"<br>Année_de_sortie"+this.Année_de_sortie+"<br>le_Producteur"+this.le_Producteur);
        document.getElementById(this.movie_id).append(paragarph);
    }
}
let movie1=new movie("movie1",2004,"zaki","movie1");
let movie2=new movie("movie2",2004,"zaki","movie2");
let movie3=new movie("movie3",2004,"zaki","movie3");

let list_movies = new Array(movie1,movie2,movie3);
function our_movies()
{
    let button=document.getElementById("our_movies");
    button.disabled=true;
    let ourmovies=document.createElement("div");
   
    list_movies.forEach(element => 
    {
        let paragarph=document.createElement("p");
        paragarph.innerHTML=("titre"+element.titre+"<br>Année_de_sortie"+element.Année_de_sortie+"<br>le_Producteur"+element.le_Producteur);
        let newdiv=document.createElement("div");
        newdiv.append(paragarph);
    });
    
    button.replaceWith(ourmovies);
    console.log("hahahha");
}
function showForm() 
{
    document.getElementById('buy').style.display = 'none';
    document.getElementById('ticketForm').style.display = 'block';
}