<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    border: 2px solid #ffd700;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: flex;
    margin-bottom: 5px;
}

input,
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

div {
    column-count: 3;
    column-gap: 20px; 
}

div label {
    display: flex;
    margin-bottom: 5px;
    white-space: nowrap;
}

div input {
    margin-right: 5px;
}

.skills-container {
    display: flex;
    flex-wrap: wrap;
}

.skills-container label input:checked {
    background-color: #ffa500;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #ffd700;
    color: #fff;
    border: 2px solid #ffd700;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
}

button:hover {
    background-color: #ffcc00;
    border: 2px solid #ffcc00;
}

</style>
<form action="result.php" method="get">
    <label>Name </label>
    <input type="text" name="name"><br>

    <label>Club you want to apply </label>
    <select name="club">
        <option value="Robotic Club">Robotic Club</option>
        <option value="Dance Club">Dance Club</option>
        <option value="Art Club">Art Club</option>
    </select><br>

    <label>Be time for you </label>
    <div>
       <label>
          <input type="radio" name="day" value="Saturday mornings" /> Saturday mornings
       </label>
       <label>
          <input type="radio" name="day" value="Saturday afternoons" /> Saturday afternoons
       </label><br>
       <label>
          <input type="radio" name="day" value="Sunday afternoons" /> Sunday afternoons
       </label><br>
    </div>

    <label>Your skills </label>
    <div class="skills-container">
        <label>
            <input type="checkbox" name="skills[]" value="the best coder" /> the best coder
        </label>
        <label>
            <input type="checkbox" name="skills[]" value="good in arts" /> good in arts
        </label><br>
        <label>
            <input type="checkbox" name="skills[]" value="a super star" /> a super star
        </label>
        <label>
            <input type="checkbox" name="skills[]" value="a crazy dancer" /> a crazy dancer
        </label><br>
        <label>
            <input type="checkbox" name="skills[]" value="singer" /> singer
        </label>
        <label>
            <input type="checkbox" name="skills[]" value="good in design" /> good in design
        </label><br>
        <label>
            <input type="checkbox" name="skills[]" value="the best eater" /> the best eater
        </label>
        <label>
            <input type="checkbox" name="skills[]" value="good in speeches" /> good in speeches
        </label><br>
    </div>

    <button type="submit">SUBMIT !</button>
</form>
