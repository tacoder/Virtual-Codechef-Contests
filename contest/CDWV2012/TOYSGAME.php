<?php require("../../includes/header.php"); ?><h1>Game of Toys</h1><div class="content">

<p>Brainy Smurf and Clumsy Smurf are fond of toys. One day, tired of playing from same toys again and again, they decided to play a new game. In this game they arranged <b>N</b> toys (<b>T<sub>1</sub>, T<sub>2</sub>,..., T<sub>N</sub></b>) in a row and selected a number <b>K</b>. <b>Brainy starts the game</b> and they alternate turn. In their turn they can select any <b>'continuous' sequence</b> of <b>K</b> toys from the current toy sequence and remove them (see note). <b>The person who is unable to make a move in their turn will be loser of this game.</b> If they both play optimally, find who is going to be the winner.</p>
<p>Note:</p>
<p>Originally there are <b>N</b> toys, namely <b>T<sub>1</sub>, T<sub>2</sub>, ..., T<sub>N</sub></b>, arranged in a row.<br/></br/></p>
<p>A continuous sequence [<b>p</b>, <b>q</b>] is a sequence <b>T<sub>p</sub>, T<sub>p+1</sub>, T<sub>p+2</sub>, ..., T<sub>q</sub></b>.<br/></br/></p>
<p>If at any given instant of time, they have the sequence <b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>, <b>T<sub>5</sub></b>, <b>T<sub>6</sub></b>, <b>T<sub>10</sub></b>, then all possible 'continuous' sequence are (<b>T<sub>1</sub></b>), (<b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>), (<b>T<sub>2</sub></b>), (<b>T<sub>5</sub></b>), (<b>T<sub>5</sub></b>, <b>T<sub>6</sub></b>), (<b>T<sub>6</sub></b>), (<b>T<sub>10</sub></b>).<br/></br/></p>
<h3>Input</h3>
<p>In the first line of input there are two integers <b>T</b> and <b>K</b>, number of test cases and the number of continuous toys which can be removed in a turn.</p>
<p>Then follow <b>T</b> lines containing a single integer <b>N</b>, the number of toys in the original arrangement.</p>
<h3>Output</h3>
<p>For each test case, print "<b>Brainy</b>" (without quotes) if he is going to win, otherwise "<b>Clumsy</b>" (again without quotes) in separate lines. </p>
<h3>Constraints</h3>
<p>1 ≤ <b>T, K, N</b> ≤ 1000</p>
<h3>Example</h3>
<pre>
<b>Input :</b>
8 1
1
2
3
4
5
6
7
8

<b>Output:</b>
Brainy
Clumsy
Brainy
Clumsy
Brainy
Clumsy
Brainy
Clumsy

<b>Explanation:</b>
</pre><p>As K = 1, players are allowed to remove only one toy in their turn. So for even number of toys Clumsy will always end the game thus being winner, and for odd Brainy will.</p>
<pre>
<b>Input :</b>
4 3
2	
3
6
8

<b>Output:</b>
Clumsy
Brainy
Brainy
Clumsy

<b>Explanation:</b>
</pre><p>There are 4 test cases and K = 3, i.e., players are allowed to remove a continuous sequence of 3 toys. <br/></br/></p>
<p>Test #1: N = 2, Brainy can't proceed as there are already less than 3 toys.<br/></br/></p>
<p>Test #2: N = 3, Brainy can remove all 3 balls, so Clumsy is not left with any toy to proceed.<br/></br/></p>
<p>Test #3: N = 6, There are originally 6 toys, {T<sub>1</sub>, T<sub>2</sub>, T<sub>3</sub>, T<sub>4</sub>, T<sub>5</sub>, T<sub>6</sub>}. Brainy starts by removing toys {T<sub>2</sub>, T<sub>3</sub>, T<sub>4</sub>}. Thus Clumsy is left with toy sequence {T<sub>1</sub>, T<sub>5</sub>, T<sub>6</sub>}. As there is no continuous sequence of size 3, Clumsy can't make a move and so doomed to loose.<br/></br/></p>
<p>Test #4: N = 8, For whatever the move Brainy made, he is doomed to lose if Clumsy play optimally, and he will play optimally :).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kumarvimal">kumarvimal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>