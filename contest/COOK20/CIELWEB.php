<?php require("../../includes/header.php"); ?><h1>Ciel and Communications System</h1><div class="content">

<p>
Ciel has <strong>N</strong> restaurants on a long straight road.<br />
The coordinate of the <strong>i</strong>-th restaurant is <strong>X<sub>i</sub></strong>, and <strong>X</strong><sub>1</sub> ≤ <strong>X</strong><sub>2</sub> ≤ ...  ≤ <strong>X<sub>N</sub></strong>.<br />
Note that more than one restaurant can have the same coordinate. (They may be in the same building.)
</p>
<p>
When the <strong>i</strong>-th restaurant communicates with the <strong>j</strong>-th restaurant (<strong>i</strong> &lt; <strong>j</strong>), a bit strange method is used.<br />
In the method, some towers are used.<br />
Each tower <strong>t</strong> has four parameters <strong>Y</strong>[<strong>t</strong>], <strong>R</strong>[<strong>t</strong>], <strong>C</strong>[<strong>t</strong>] and <strong>T</strong>[<strong>t</strong>].<br />
Here <strong>Y</strong>[<strong>t</strong>] denotes the coordinate of the tower, <strong>R</strong>[<strong>t</strong>] denotes the range of the tower, <strong>C</strong>[<strong>t</strong>] denotes the cost for using the tower if the distance between the tower and the restaurant is 1, and <strong>T</strong>[<strong>t</strong>] denotes the type of the tower.<br />
The <strong>i</strong>-th restaurant can use the tower <strong>t</strong> if and only if |<strong>X<sub>i</sub></strong> - <strong>Y</strong>[<strong>t</strong>]| ≤ <strong>R</strong>[<strong>t</strong>].<br />
Here <strong>T</strong>[<strong>t</strong>] is represented as an integer 1 ≤ <strong>T</strong>[<strong>t</strong>] ≤ <strong>M</strong>, where <strong>M</strong> is the number of types.
</p>
<p>
For some security reasons, the <strong>k</strong>-th restaurant can communicate with only the (<strong>k</strong>±1)-th restaurant directly.<br />
So, it is necessary that the <strong>k</strong>-th restaurant communicates with the (<strong>k</strong>+1)-th restaurant for all <strong>i</strong> ≤ <strong>k</strong> &lt; <strong>j</strong>.<br />
For each communication between the <strong>k</strong>-th and (<strong>k</strong>+1)-th restaurants, each restaurant chooses the newest available tower.<br />
Let <strong>TOWER<sub>k</sub></strong> be the newest available tower for the <strong>k</strong>-th restaurant, and let <strong>TYPE</strong>[<strong>k</strong>] be the type of <strong>TOWER<sub>k</sub></strong>.<br />
The cost for the communication is <strong>C</strong>[<strong>TOWER<sub>k</sub></strong>] * |<strong>Y</strong>[<strong>TOWER<sub>k</sub></strong>] - <strong>X</strong><sub><strong>k</strong></sub>| + <strong>C</strong>[<strong>TOWER</strong><sub><strong>k</strong>+1</sub>]  * |<strong>Y</strong>[<strong>TOWER</strong><sub><strong>k</strong>+1</sub>] - <strong>X</strong><sub><strong>k</strong>+1</sub>|.<br />
If <strong>TOWER<sub>k</sub></strong> ≠ <strong>TOWER</strong><sub><strong>k</strong>+1</sub>, then additionally the cost <strong>U</strong><sub><strong>TYPE</strong>[<strong>k</strong>], <strong>TYPE</strong>[<strong>k</strong>+1]</sub> is needed.<br />
The total cost of the communication between the <strong>i</strong>-th and <strong>j</strong>-th restaurants is the sum of the cost of the communication between the <strong>k</strong>-th and (<strong>k</strong>+1)-th restaurants over all <strong>i</strong> ≤ <strong>k</strong> &lt; <strong>j</strong>.<br />
If there should exist some <strong>i</strong> ≤ <strong>k</strong> ≤ <strong>j</strong> such that the <strong>k</strong>-th restaurant has no available towers, the communication is impossible.
</p>
<p>
Now Ciel has the history of communications and constructions of towers.<br />
Your task is to calculate the cost for each communication in the history.<br />
In the beginning of the history, you should assume that there are no towers.
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>N</strong>, <strong>M</strong> and <strong>Q</strong>, where <strong>Q</strong> denotes the number of the lines of the history.<br />
Then next line contains <strong>N</strong> integers, where the <strong>i</strong>-th integer denotes <strong>X<sub>i</sub></strong>.<br />
Then next <strong>M</strong> lines contain <strong>M</strong> integers, where the <strong>j</strong>-th integer of the <strong>i</strong>-th line denotes <strong>U</strong><sub><strong>i</strong>,<strong>j</strong></sub><br />
Then next <strong>Q</strong> lines denote the history of communications and constructions.<br />
The history is composed of the two types of lines.<br />
The line "1 <strong>A</strong> <strong>B</strong>" (without quotes) means that the <strong>A</strong>-th restaurant communicates with the <strong>B</strong>-th restaurant.<br />
The line "2 <strong>Y</strong> <strong>R</strong> <strong>C</strong> <strong>T</strong>" (without quotes) means that the tower whose parameters are <strong>Y</strong>, <strong>R</strong>, <strong>C</strong> and <strong>T</strong> is built.
</p>
<h3>Output</h3>
<p>
For each communication, print the cost.<br />
If it is impossible, print "impossible" without quotes.
</p>
<h3>Constraints</h3>
<p>
2 ≤ <strong>N</strong> ≤ 100000 (10<sup>5</sup>)<br />
1 ≤ <strong>M</strong> ≤ 50<br />
1 ≤ <strong>Q</strong> ≤ 50000 (5 * 10<sup>4</sup>)<br />
0 ≤ <strong>X</strong><sub>1</sub> ≤ <strong>X</strong><sub>2</sub> ≤ ... ≤ <strong>X<sub>N</sub></strong> ≤ 1000000000 (10<sup>9</sup>)<br />
0 ≤ <strong>U</strong><sub><strong>i</strong>,<strong>j</strong></sub> ≤ 1000000000 (10<sup>9</sup>)<br />
1 ≤ <strong>A</strong> &lt; <strong>B</strong> ≤ <strong>N</strong><br />
0 ≤ <strong>Y</strong> ≤ 1000000000 (10<sup>9</sup>)<br />
1 ≤ <strong>R</strong> ≤ 1000000000 (10<sup>9</sup>)<br />
1 ≤ <strong>C</strong> ≤ 10000 (10<sup>4</sup>)<br />
1 ≤ <strong>T</strong> ≤ <strong>M</strong><br />
<strong>U</strong><sub><strong>i</strong>,<strong>j</strong></sub> = <strong>U</strong><sub><strong>j</strong>,<strong>i</strong></sub>
</p>
<h3>Sample Input</h3>
<pre>5 2 6
1 3 5 7 10
1 3
3 1
1 1 2
2 5 5 1 1
1 1 2
1 1 4
2 4 1 2 1
1 1 4</pre><h3>Sample Output</h3>
<pre>impossible
6
10
16</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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