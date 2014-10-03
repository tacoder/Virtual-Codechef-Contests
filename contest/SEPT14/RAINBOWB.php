<?php require("../../includes/header.php"); ?><h1>Chef and Rainbow Array - 2</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/RAINBOWB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/RAINBOWB.pdf">Russian</a>.</h3>
<p> </p>
<p>Chef loves arrays. But he really loves a specific kind of them - <i>Rainbow Arrays</i>. </p>
<p>The array is a <i>Rainbow Array</i> if it has such a structure:</p>
<ul>
<li>The first <b>a<sub>1</sub></b> elements equal to <b>1</b>. </li>
<li>The next <b>a<sub>2</sub></b> elements equal to  <b>2</b>. </li>
<li>The next <b>a<sub>3</sub></b> elements equal to  <b>3</b>. </li>
<li>The next <b>a<sub>4</sub></b> elements equal to  <b>4</b>. </li>
<li>The next <b>a<sub>5</sub></b> elements equal to  <b>5</b>. </li>
<li>The next <b>a<sub>6</sub></b> elements equal to  <b>6</b>. </li>
<li>The next <b>a<sub>7</sub></b> elements equal to  <b>7</b>. </li>
<li>The next <b>a<sub>6</sub></b> elements equal to  <b>6</b>. </li>
<li>The next <b>a<sub>5</sub></b> elements equal to  <b>5</b>. </li>
<li>The next <b>a<sub>4</sub></b> elements equal to  <b>4</b>. </li>
<li>The next <b>a<sub>3</sub></b> elements equal to  <b>3</b>. </li>
<li>The next <b>a<sub>2</sub></b> elements equal to  <b>2</b>. </li>
<li>The next <b>a<sub>1</sub></b> elements equal to  <b>1</b>. </li>
<li><b>a<sub>i</sub></b> is a positive integer, the variables with the same index (<b>a<sub>1</sub></b> in the first statement and <b>a<sub>1</sub></b> in the last one, for example) are equal. </li>
<li>There are no any other elements in array. </li>
</ul>

<p>
 For example, {<b>1,1,2,2,2,3,4,5,5,6,7,7,7,6,5,5,4,3,2,2,2,1,1</b>} is a <i>Rainbow Array</i>.<br />
The array {<b>1,2,3,4,5,6,7,6,6,5,4,3,2,1</b>} is not a <i>Rainbow Array</i>, because the sizes of the blocks with the element <b>6</b> are different. </p>
<p>Please help Chef to count the number of different <i>Rainbow Arrays</i> that contain exactly <b>N</b> elements. </p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b>. </p>
<h3>Output</h3>
<p>Output the number of different Rainbow Arrays with <b>N</b> elements, modulo <b>10^9+7</b>. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>


</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input #1:</b>
10 

<b>Output #1:</b>
0

<pre><b>Input #2:</b>
13

<b>Output #2:</b>
1

<pre><b>Input #3:</b>
14

<b>Output #3:</b>
1

<pre><b>Input #4:</b>
15

<b>Output #4:</b>
7

</pre><p> </p>
</pre></pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>