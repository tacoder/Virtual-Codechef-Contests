<?php require("../../includes/header.php"); ?><h1>Chef and Digits</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/ADIGIT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/ADIGIT.pdf">Russian</a>.</h3>
<p> </p>
<p> Yesterday Chef had a great party and doesn't remember the way he celebreated it. But he found a strange paper in his kitchen containing <b>n</b> digits (lets give them indices from <b>1</b> to <b>n</b> and name them <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b> ... <b>a<sub>N</sub></b>). </p>
<p> Chef remembers that he played such game:</p>
<ul>
<li> On each step he choose an index <b>x</b> from <b>1</b> to <b>n</b>.</li>
<li> For all indices <b>y (y &lt; x)</b> he calculated the difference <b>b<sub>y</sub></b> = <b>a<sub>x</sub></b> - <b>a<sub>y</sub></b>. </li>
<li> Then he calculated <b>B1</b> - sum of all <b>b<sub>y</sub></b> which are greater than <b>0</b> and <b>B2</b> - sum of all <b>b<sub>y</sub></b> which are less than <b>0</b>. </li>
<li> The answer for this step is <b>B1 - B2</b>. </li>
</ul>
<p>Chef remembers the game, but forgot the answer. Please, help him!</p>
<h3>Input</h3>
<ul>
<li>The first line contains two integers <b>n, m</b> denoting the number of digits and number of steps. The second line contains <b>n</b> digits (without spaces) <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>n</sub></b>. </li>
<li> Each of next <b>m</b> lines contains single integer <b>x</b> denoting the index for current step. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each of <b>m</b> steps print single number in a line - answer of the step.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>10^5</b></li>
<li><b>0</b> ≤ <b>a<sub>i</sub></b> ≤ <b>9</b></li>
<li><b>1</b> ≤ <b>x</b> ≤ <b>n</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
10 3
0324152397
1
4
7

<b>Output:</b>
0
7
9

</pre><pre>
<p> </p>
<h3>Explanation</h3>
<p>For index <b>1</b> there are no indexes which are less, so <b>B1 = B2 = 0</b> and the answer is <b>0</b>.</p>
<p>For index <b>4</b> we have 

<b>b<sub>1</sub> = 4-0=4</b>, 
<b>b<sub>2</sub> = 4-3=1</b>, 
<b>b<sub>3</sub> = 4-2=2</b>, 

so <b>B1 = 4+1+2 = 7</b>, <b>B2 = 0 </b>
and the answer is <b>7</b>.</p>
<p>For index <b>7</b> we have

<b>b<sub>1</sub> = 2-0=2</b>, 
<b>b<sub>2</sub> = 2-3=-1</b>, 
<b>b<sub>3</sub> = 2-2=0</b>, 
<b>b<sub>4</sub> = 2-4=-2</b>, 
<b>b<sub>5</sub> = 2-1=1</b>, 
<b>b<sub>6</sub> = 2-5=-3</b>, 

so <b>B1 = 2 + 1 = 3</b>,
     <b>B2 = -1 -2 -3 = -6</b> 
and the answer is <b>9</b>.</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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