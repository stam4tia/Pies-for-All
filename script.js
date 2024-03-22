function generateRandomPieRecipe() {
    const recipeContainer = document.getElementById('recipeContainer');
    recipeContainer.innerHTML = '';
  
    // function to fetch a random pie recipe
    const fetchRandomPieRecipe = async () => {
      try {
        // API endpoint to fetch recipes containing "pie" in their names
        const apiUrl = "https://www.themealdb.com/api/json/v1/1/search.php?s=pie";
  
        // sending a GET request to the API endpoint
        const response = await fetch(apiUrl);
  
        if (!response.ok) {
          throw new Error('Error fetching pie recipes.');
        }
  
        const data = await response.json();
  
        // check if there are any pie recipes
        if (data.meals && data.meals.length > 0) {
          // randomly select a pie recipe from the list
          const randomIndex = Math.floor(Math.random() * data.meals.length);
          const recipeId = data.meals[randomIndex].idMeal;
  
          // fetch details for the selected pie recipe
          const recipeDetailsResponse = await fetch(`https://www.themealdb.com/api/json/v1/1/lookup.php?i=${recipeId}`);
          const recipeDetailsData = await recipeDetailsResponse.json();
  
          // getting recipe information from the response
          const recipe = recipeDetailsData.meals[0];
  
          // displaying the recipe
          const recipeHtml = `
            <h2>${recipe.strMeal}</h2>
            <img src="${recipe.strMealThumb}" alt="${recipe.strMeal}">
            <h3><strong>Category:</strong> ${recipe.strCategory}</h3>
            <h3><strong>Area:</strong> ${recipe.strArea}</h3>
            
            
          `;
          recipeContainer.innerHTML = recipeHtml;
        } else {
          throw new Error('No pie recipes found.');
        }
      } catch (error) {
        console.error(`Error generating pie recipe: ${error}`);
        // retry if an error occurs (e.g., no pie recipes found)
        fetchRandomPieRecipe();
      }
    };
  
    // start fetching a random pie recipe
    fetchRandomPieRecipe();
  }

  
  