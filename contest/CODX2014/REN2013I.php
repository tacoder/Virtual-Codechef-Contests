<?php require("../../includes/header.php"); ?><h1>Game Of Sticks</h1><div class="content">
<p> </p>
<p>Bob was walking down the street all alone one day thinking of what to do. While walking he found a couple of sticks of different lengths lying on the road. He picked them up and devised a game that could be played with them.</p>
<p>
He glued magnets on to both ends of all the sticks so that he could easily join any two sticks. In this way he could form many triangles. Now the game he made was to use all or some of these magnetic sticks to form triangles. The winner of the game was the one who could form triangles such that the sum of the area of all triangles formed was larger.</p>
<p>
So now he called up Alice and asked her to play this game with him. They both select some sticks and a make triangles out of them and then the one to make triangles such that total area of those triangles is larger wins.</p>
<p>
As usual Alice goes first. In her turn she doesn't actually show all the triangles to Bob, rather she just tells him the total area of the triangles formed. Bob is aware of the fact that Alice might cheat or not play properly so if he sees that it is not possible to make triangles such that the sum of the area amounts to what Alice said then he openly declares that it's not possible , otherwise Bob plays his turn.</p>
<p>
Alice plays optimally, in the sense that if she declares her total area then for at least one possible subset of the given set of stick lengths , the maximum area possible using the sticks in that subset is the area declared by Alice. If the area declared by Alice is not exactly equal to the maximum area of any subset of the set of stick lengths then Bob considers it to be not possible.</p>
<p>
Bob plays optimally, in the sense that the area he declares will be the maximum possible area for the given set of stick lengths ( because he had a lot of time for testing all possible set selections while Alice was coming to his house ).<br />
Therefore the game can end only in a DRAW,BOB WINS or AREA NOT POSSIBLE verdict (poor Alice :( ).</p>
<p>
So given the stick lengths and the area declared by Alice, you have to predict the verdict of the game.</p>
<h3>Input</h3>
<p>The input will start with a single line containing the number of sticks in the set ( 1&lt;=N&lt;=16 ).</p>
<p>
The next N lines contain a single integer. The i<sup>th</sup> of these lines contains L<sub>i</sub> (1&lt;=L<sub>i</sub> &lt;=100) the length of the i<sup>th</sup>.</p>

<p>The last line contains a single real number A (1&lt;=A&lt;=10000000).</p>
<h3>Output</h3>
<p>The first line of the output should consist of the verdict of the game. If the game ends in a draw print "DRAW" , if bob wins print "BOB WINS", if Alice's area is not proper as per Bob then print "AREA NOT POSSIBLE" (all of which will be without quotes).</p>
<p>
Additionally, if Bob wins print in the next line the area declared by Bob. Errors in the answer less than 10<sup>-6</sup> are neglected.</p>
<h3>Example</h3>
<pre><b>Input 1:</b>
7
3
4
5
6
7
8
9
6

<b>Output 1:</b>

BOB WINS
36.754383


<b>Input 2:</b>

7
3
4
5
6
7
8
9
21.630119

<b>Output 2:</b>

AREA NOT POSSIBLE
</pre>
<h3>Explanation</h3>
<p><b>Example case 1</b><br />
Alice's area is valid as it is the maximum sum of area of triangles formed by picking sticks of length 3,4 and 5.But Bob wins as overall maximum is more than Alice's area.
</p>
<p><b>Example case 2</b><br />
Alice's area can be made using stick lengths 4,5 and 7 as one triangle and 3,8 and 9 as another triangle but using the set 4,5,7,3,8,and 9 the maximum area that can be made is 32.832816 which means Alice did not play optimally hence This area is not possible.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>