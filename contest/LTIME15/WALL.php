<?php require("../../includes/header.php"); ?><h1>Wall</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME15/mandarin/WALL1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME15/russian/WALL.pdf">Russian</a>.</h3>
<p><i>The Wall is a massive wall over 700 feet high and is made of ice, stretching 300 miles across the northern border of the Seven Kingdoms, separating it from the wild lands beyond. Appearing as one of the nine Wonders Made by Man in the book by Lomas Longstrider, the Wall is defended and held by the Sworn Brothers of the Night's Watch, who patrol and guard the castles from the Frostfangs mountain range in the west to the Bay of Seals in the east.</i></p>
<p align="right">(c) A Wiki of Ice and Fire</p>
<p><img src="https://codechef_shared.s3.amazonaws.com/download/LTIME15/wall.jpg" height="250" /></p>
<p>Winter is coming. The army of White Walkers is heading to the south. The Wall is the only obstacle, that protects the people of the Seven Kingdoms from the danger.</p>
<p>In this problem we assume, that the Wall can be described as a rectangle <b>R</b> on the Cartesian plane. The corner points of <b>R</b> are (0, 0), (0, <b>H</b>), (<b>W</b>, <b>H</b>) and (<b>W</b>, 0).</p>
<p>In order to reinforce the Wall, the brothers of the Night's Watch have placed a huge simple polygonal chain <b>P</b> made of the purest valyrian steel on the wall. <b>P</b> can be desribed as following:</p>
<p><ul>
<li><b>P</b> consists of <b>N</b> points, both coordinates of which are integers;</li>
<li>The points are indexed with integers from 0 to <b>N - 1</b>;</li>
<li>X-coordinate of <b>i</b>'th point of <b>P</b> equals to <b>X<sub>i</sub></b>;</li>
<li>
            Y-coordinate of <b>i</b>'th point of <b>P</b> equals to:</li></ul></p>
<ul>
<li>0, if <b>i</b> is even;</li>
<li><b>H</b>, if <b>i</b> is odd.</li>
</ul>

<li><b>X<sub>0</sub></b> equals to 0;</li>
<li><b>X<sub>i</sub></b> &lt; <b>X<sub>i + 1</sub></b> for <b>0 ≤ i &lt; N - 1</b>;</li>
<li><b>X<sub>N - 1</sub></b> equals to <b>W</b>.</li>


<p>Your task is pretty simple: calculate the area of <b>R</b>, which is lying under <b>P</b>.</p>
<p>Let's consider a small example for your better understanding:</p>
<p>
    Let's define <b>H</b> = 4, <b>W</b> = 6, <b>N</b> = 3, <b>X<sub>0</sub></b> = 0, <b>X<sub>1</sub></b> = 5, <b>X<sub>2</sub></b> = 6.
</p>
<p><img src="https://codechef_shared.s3.amazonaws.com/download/LTIME15/wall2.jpg" height="250" /></p>
<p>In this testcase we are interested in caculating the area of the green triangle.</p>
<p><b>N</b> can be extremely huge in this problem, so it's impossible to give you array <b>X</b> itself. Instead of this, we will provide some additional variables and arrays, with a help of which you will be able to generate array <b>X</b> inside your program.</p>
<p>We will use additional integer variables <b>M</b>, <b>A</b>, <b>B</b> and <b>IND</b>. Also, additional array <b>D</b>, which consists of <b>M</b> integers and is indexed with integers from 0 to <b>M - 1</b> will be used.</p>
<p>Here's a pseudocode, which generates array <b>X</b>:</p>
<pre><code>
X[0] = 0
for i from 1 to N - 1:
begin
      X[i] = X[i - 1] + D[IND]
      IND = (A * IND + B) % M
end
</code></pre><p></p>
<h3>Note</h3>
<p>
Maybe, some of you aren't familiar with definitions from the statement. Here're some articles that could help you to understand the problem correctly:</p>
<ul>
<li>Cartesian plane: <a href="http://en.wikipedia.org/wiki/Cartesian_plane">http://en.wikipedia.org/wiki/Cartesian_plane</a></li>
<li>Polygonal chain: <a href="http://en.wikipedia.org/wiki/Polygonal_chain">http://en.wikipedia.org/wiki/Polygonal_chain</a></li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of testcases. The description of <b>T</b> testcases follows.</p>

<p>The first line of each testcase contains an integer <b>H</b>, denoting the height of <b>R</b>.</p>
<p>The second line contains two integer <b>N</b> and <b>M</b>, denoting the number of points in <b>P</b> and an additional variable.</p>
<p>The third line contains three integers <b>A</b>, <b>B</b> and <b>IND</b>, denoting additional variables.</p>
<p>The fourth line contains <b>M</b> integers, <b>i</b>'th one denotes <b>D<sub>i - 1</sub></b>.</p>
<p><b>Note:</b> <b>W</b> is not provided in the input, but according to the legend it equals to <b>X<sub>N - 1</sub></b>.</p>
<h3>Output</h3>
<p>For each test case the only line of the output should contain the only float: the area of <b>R</b>, which is lying under <b>P</b>.</p>
<p><b>IMPORTANT:</b> the result should be printed out with <b>exactly</b> one digit after the decimal point. Ignoring of that requirement may lead correct solutions to the WA verdict.</p>
<p>Also, do not add any newlines between different testcases.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 6, for each input file;</li>
<li>1 ≤ <b>H</b> ≤ 100000;</li>
<li>0 ≤ <b>A</b>, <b>B</b>, <b>IND</b> &lt; <b>M</b>;</li>
<li>1 ≤ <b>D<sub>i</sub></b> &lt; 10<sup>4</sup>;</li>
<li>Subtask 1(34 points): 2 ≤ <b>N</b> ≤ 524288, 1 ≤ <b>M</b> ≤ 524288;</li>
<li>Subtask 2(33 points): 2 ≤ <b>N</b> ≤ 1000000000, 1 ≤ <b>M</b> ≤ 256;</li>
<li>Subtask 3(33 points): 2 ≤ <b>N</b> ≤ 1000000000, 1 ≤ <b>M</b> ≤ 524288.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
2 2
0 1 0
10 10
10
10 5
2 3 4
2 5 1 1 4

<b>Output:</b>
25.0
140.0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-07-2014</td>
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