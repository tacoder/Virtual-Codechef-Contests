<?php require("../../includes/header.php"); ?><h1>XOR Minimization</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/mandarin/MINXOR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/russian/MINXOR.pdf">Russian</a> as well.</h3>
<p>
You are given an array <b>A</b> consisting of <b>N</b> non-negative integers. The elements of array <b>A</b> are indexed with integers 1, 2, 3, ..., <b>N</b>. You need to implement a data structure, which can process the following queries efficiently:
</p>
<p><ul type="square">
<li>1 <b>L</b> <b>R</b>: find the minimal number in the subarray <b>A[L..R]</b> and count how many times it appears there;
</li><li>2 <b>L</b> <b>R</b> <b>K</b>: replace each number <b>A<sub>i</sub></b> with the expression (<b>A<sub>i</sub></b> xor <b>K</b>) for the subarray <b>A[L..R]</b>.
	</li></ul>
</p>
<p>You can read about XOR-operation here: <a href="http://en.wikipedia.org/wiki/Exclusive_or">http://en.wikipedia.org/wiki/Exclusive_or</a></p>
<h3>Input</h3>

<p>The first line of the input contains two integers <b>N</b> and <b>Q</b>, denoting the size of <b>A</b> and the number of the queries to process. The second line contains <b>N</b> non-negative integers, denoting array <b>A</b>.</p>
<p>The next <b>Q</b> lines contain the queries to process, each contains one query. The format of queries is the same with the one described in the legend.</p>
<h3>Output</h3>
<p>Your output should contain exactly <b>Q<sub>1</sub></b> lines, where <b>Q<sub>1</sub></b> is the number of the queries of the first type in the input.</p>
<p>For each query of the first type you need to output two numbers: the minimal number in the subarray <b>A[L..R]</b> and the number of times it appears there. You should output the answers for the queries in the order they appear in the input.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 250 000;</li>
<li>The number of the queries of the first type won't exceed 40000;</li>
<li>The number of the queries of the second type won't exceed 10000;</li>
<li>0 ≤ <b>A<sub>i</sub></b> &lt; 65536;</li>
<li>0 ≤ <b>K</b> &lt; 65536, for each query of the second type appeared in the input;</li>
<li>1 ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b>, for each query appeared in the input.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 3 
0 1 0 1 0 
1 1 5 
2 1 5 1 
1 1 5

<b>Output:</b>
0 3 
0 2
</pre>
<h3>Explanation</h3>
<p>
Initially <b>A[]</b> = {0, 1, 0, 1, 0}.
</p>
<p>
After the second query <b>A[]</b> = {1, 0, 1, 0, 1}.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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