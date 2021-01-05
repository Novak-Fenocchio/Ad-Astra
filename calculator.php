<!DOCTYPE html>

<html>
    <head>
        <?php include_once 'includes/templates/head.php'; ?>
    </head>
    <body>
        <?php include_once 'includes/templates/headerBasic.php' ?>

        <main>
            <section class='section_main_calculator'>
                <div class="title">
                <h2 id='title_calculator'>Calculator of sunlight's velocity</h2>
                </div>
                <p class='explication'>The light travel from the sun to our planets, this trip has a duration, it 
                depends of the distancy between the bodies, You can calculate it with this 
                calculator. </p>
                <div class="calculator">
                    <h3>Select the planet</h3>
                    <select name="" id="planet">
                        <option value="">Select a planet</option>
                        <option value="Mercury">Mercury</option>
                        <option value="Earth">Earth</option>
                        <option value="Mars">Mars</option>
                        <option value="Jupiter">Júpiter</option>
                        <option value="Saturn">Saturno</option>
                        <option value="Uranus">Urano</option>
                        <option value="Neptune">Neptuno</option>
                        <option value="Pluton">Plutón</option>
                    </select> <br>
                    <button id='calculate'>Calculate</button>
                </div>
                <section class='section_result' style='display:none;'>
                    <h2>The travel's duration of the sunlight to the <span id='planetName'></span> is:</h2>
                    <h3 id='duration'></h3>
                        <p>how many things you can do in just <span id='question'></span>? The sunlight can travel <span id='distance'></span> kilometers.</p>
                        <p>she flies at 300,000 kilometers per second.</p>
                </section>
            </section>



            <?php include_once 'includes/templates/footer.php'; ?>
        </main>

        <?php include_once 'includes/templates/scripts.php' ?>
        <script src="https://unpkg.com/scrollreveal"></script>
  
    </body>
</html>