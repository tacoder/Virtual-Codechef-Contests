<?php require("../../includes/header.php"); ?><h1>Petersen Graph</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/PETERSEN.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/PETERSEN.pdf">Russian</a> as well.</h3>
<p>
	The following graph <b>G</b> is called a <a href="http://en.wikipedia.org/wiki/Petersen_graph">Petersen graph</a> and its vertices have been numbered from <b>0</b> to <b>9</b>. Some letters have also been assigned to vertices of <b>G</b>, as can be seen from the following picture:
</p>
<p>
	<img src="http://www.codechef.com//download/Petersen1tinysvg.png" width="300" />
</p>
<p>
	Let's consider a walk <b>W</b> in graph <b>G</b>, which consists of <b>L</b> vertices <b>W<sub>1</sub></b>, <b>W<sub>2</sub></b>, ..., <b>W<sub>L</sub></b>, such that <b>W<sub>i</sub></b> is connected with <b>W<sub>i + 1</sub></b> for 1 ≤ <b>i</b> &lt; <b>L</b>. A string <b>S</b> of <b>L</b> letters <b>'A'-'E'</b> is realized by walk <b>W</b> if the sequence of letters written along <b>W</b> is equal to <b>S</b>. Vertices can be visited multiple times while walking along <b>W</b>.
</p>
<p>For example, <b>S</b> = <b>'ABBECCD'</b> is realized by <b>W</b> = (0, 1, 6, 9, 7, 2, 3).</p>
<p>Your task is to determine whether there is a walk <b>W</b> which realizes a given string <b>S</b> in graph <b>G</b>, and if so, find the lexicographically least such walk.</p>
<h3>Input</h3>
<p>
	The first line of the input contains one integer <b>T</b> denoting the number of testcases to process.
</p>
<p>
	The only line of each testcase contains one string <b>S</b>. It is guaranteed that <b>S</b> only consists of symbols <b>'A'-'E'</b>.
</p>
<h3>Output</h3>
<p>
	The output should contain exactly <b>T</b> lines, one line per each testcase in the order of their appearance. For each testcase, if there is no walk <b>W</b> which realizes <b>S</b>, then output <b>-1</b>. Otherwise, you should output the least lexicographical walk <b>W</b> which realizes <b>S</b>. Since all of the vertices are numbered from <b>0</b> to <b>9</b>, then it can be encoded as a string consisting of symbols <b>'0'-'9'</b> (see the "Examples" section for more details).
</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 8;</p>
<p>1 ≤ <b>|S|</b> ≤ 100000(10<sup>5</sup>).</p>
<h3>Examples</h3>
<pre><b>Input:</b>
2
AAB
AABE

<b>Output:</b>
501
-1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>