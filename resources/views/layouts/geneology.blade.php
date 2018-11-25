
                <label>Generation path</label>
                    <input
                        type='text'
                        id='generationpath'
                        name='generationpath'
                         style="width: 50em;"
                        value=' '
                        readonly>
                    <p id="patherror" class="error">Please include source of miasim</p>
                <div class="col-md-3">
                    <p id="clearer">Clear all</p>
                    <ul>
                        <li class="singleclicker clicker">Mother</li>
                        <li class="singleclicker clicker">Father</li>
                        <li class="singleclicker clicker">Undo</li>
                    </ul>
                </div>

                <label>Year</label>
                    <input
                    type='text'
                    id='yeardisplay'
                    name='yeardisplay'
                    style="width: 7em;"
                    pattern='[0-9]*'
                    value=''
                    readonly>
                <br/>
                <label>Pattern build</label>
                    <input
                    type='text'
                    style="width: 50em;"
                    id='patternstring'
                    name='patternstring'
                    value=''
                    readonly>
                 <div class="col-md-3">
                     <ul>
                        <li class="patternclicker clicker">Mother</li>
                        <li class="patternclicker clicker">Father</li>
                        <li class="patternclicker clicker">Undo</li>
                    </ul>
                </div>
                <p id="parentgenerror" class="error"> Please click a button to add to pattern build</p>
                <label>How many times does this pattern repeat?</label>
                <input
                    type='number'
                    id='genrepeatsinput'
                    name='genrepeatsinput'
                    pattern='[0-9]*'
                    value=''>
                <p id="patternadderror" class="error"> Please enter a positive integer</p>
                <p id="pattogenclicker"> Add pattern to Generation path</p>

