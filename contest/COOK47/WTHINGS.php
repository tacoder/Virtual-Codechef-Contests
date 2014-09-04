<?php require("../../includes/header.php"); ?><h1>Where the Wild Things Are</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/COOK47/mandarin2/WTHINGS.pdf" target="_blank">Mandarin Chinese</a> and <a href="/download/translated/COOK47/russian/WTHINGS.pdf" target="_blank">Russian</a> as well.</h3>
<p>Recently, Max has visited the place where the Wild Things are again. He was very happy to know, that the monsters are living in peace now.</p>
<p>His friend Carol was so excited about Max's coming back, that he proposed everyone a brand new game. Unfortunately, all the Wild Things refused to play the game, except Max and K.W., so there were only three players playing the game.</p>
<p><img height="200" src="http://www.comicdom.gr/wp-content/uploads/2013/06/wildthings.jpg" /></p>
<p>The area, where the game takes place, is the Cartesian plane(<a href="http://en.wikipedia.org/wiki/Cartesian_plane">link</a>).</p>
<p>There are <b>N</b> <i>interesting</i> points on the plane.  Each <i>interesting</i> point has integer coordinates. Also, all the <i>interesting</i> points form a strictly convex polygon(<a href="http://en.wikipedia.org/wiki/Convex_polygon#Strict_convexity">link</a>).</p>
<p>There is no need to explain the rules of the game, but it's quite important to mention the preparation process:</p>
<p>In order to play the game, the players(Max, K.W. and Carol) must choose three different <i>interesting</i> points<br /> and plant  themselves there. Also, they must choose some positive integer <b>S</b>.</p>
<p>Let's assume, that Max's <i>interesting</i> point is <b>A</b>, K.W.'s - <b>B</b> and Carol's - <b>C</b>.<br /> If the area of triangle <b>ABC</b> is greater than or equal to <b>S</b>, then the game will be <i>awesome</i>.<br /> Otherwise, it will be <i>awful</i>.</p>
<p>Now Max is on his way home. His head is filled up with the memories about the wonderful game he used to play with<br /> his friends. But there's the thing, that annoys him: he remembers, that he played the game <b>Q</b> times, but<br /> he can't recall any <i>interesting</i> point chosen by him!</p>
<p>Max exactly remembers, that in the beginning of <b>i</b>'th game K.W. chose point <b>B</b> = <b>B<sub>i</sub></b>,<br /> Carol chose point <b>C</b> = <b>C<sub>i</sub></b> and <b>S</b> was equal to <b>S<sub>i</sub></b>.<br /> Also, he remembers, that all the games were awesome.<br /> So, you are to calculate the number of different <i>interesting</i> points,<br /> that could be chosen by Max as <b>A</b> in the beginning of <b>i</b>'th game. This number can be equal to zero(in that case we can conclude, that <b>i</b>'th game wasn't awesome - anyway, just output zero).</p>
<h3>Input</h3>
<p>The first line of a test case contains two integers <b>N</b> and <b>Q</b>,<br /> denoting the number of the <i>interesting</i> points and the number of times Max played the game.</p>
<p>The next <b>N</b> lines contain two integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> each, denoting coordinates of <b>i</b>'th <i>interesting</i> point. The points are 1-indexed.</p>
<p>The next <b>Q</b> lines contain three integers <b>B<sub>i</sub></b>, <b>C<sub>i</sub></b> and <b>S<sub>i</sub></b> each. In the beginning of <b>i</b>'th game K.W. chose point <b>B<sub>i</sub></b>'th <i>interesting</i> point, Carol chose <b>C<sub>i</sub></b>'th <i>interesting</i> point and <b>S</b> was equal to <b>S<sub>i</sub></b>.</p>
<p>It's guaranteed, that the <i>interesting</i> points form a strictly convex polygon and are given in clockwise or counterclockwise order.</p>
<p>It's also guaranteed, that there are no three vertices in the input that lie on one line and no point is given twice.</p>
<h3>Output</h3>
<p>For each round of the game, output a single line containing the number of different <i>interesting</i> points, that could be chosen by Max as <b>A</b> in the beginning of the corresponding game.</p>
<h3>Constraints</h3>
<p>3 ≤ <b>N</b> ≤ 60000;</p>
<p>1 ≤ <b>Q</b> ≤ 250000;</p>
<p><b>|X|</b>, <b>|Y|</b> ≤ 10<sup>8</sup>, for each <i>interesting</i> point;</p>
<p>1 ≤ <b>B </b> != <b>C</b> ≤ <b>N</b>, <b>S</b> ≤ 10<sup>18</sup>, for each game.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
0 0
4 0
7 3
7 7
1 4 1
1 4 100

<b>Output:</b>
2
0
</pre>
<h3>Explanations</h3>
<p>For the first query, <b>A</b> could be equal to both 2 and 3;<br /><br /> For the second query, there are no possible variants for <b>A</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-05-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>