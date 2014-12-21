<?php require("../../includes/header.php"); ?><h1>Lost Graph</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/mandarin/LSTGRPH.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK52/russian/LSTGRPH.pdf">Russian</a> as well.</h3>
<p>
	Mike is given an undirected graph <b>G</b> of <b>N</b> vertices and <b>M</b> edges. A non-negative integer <b>X<sub>i</sub></b> is assigned to the <b>i</b>'th vertex of <b>G</b>, for 1 ≤ <b>i</b> ≤ <b>N</b>.
</p>
<p>
	Mike was asked to assign labels to each edge of the graph so that the following condition is satisfied:
</p>
<p>
	Let's suppose that the <b>j</b>'th edge of <b>G</b> connects vertices <b>U<sub>j</sub></b> and <b>V<sub>j</sub></b>. Then, a non-negative integer <b>Y<sub>j</sub></b> equals to <b>X<sub>U<sub>j</sub></sub> xor X<sub>V<sub>j</sub></sub></b>.
</p>
<p>
	This challenge was too easy for Mike and he solved it quickly.
</p>
<p>
	The next day, Mike started to worry that he had solved the problem too quickly and had made a lot of mistakes, so he decided to double-check his answers. To his horror, Mike discovered that all the values of <b>X<sub>i</sub></b> had been lost!
</p>
<p>
	Mike is a very meticulous person and he doesn't like making mistakes, so he decided to create his own values of <b>X<sub>i</sub></b> that still produce the same values of <b>Y<sub>j</sub></b>.
</p>
<p>
	Your task is to determine whether it is possible to do so. If it is, you should output the <b>K</b>'th lexicographically valid sequence (<b>X<sub>1</sub></b>, <b>X<sub>2</sub></b>, ..., <b>X<sub>N</sub></b>) that satisfies the above conditions, knowing the structure of <b>G</b> and all the values <b>Y<sub>j</sub></b>.
</p>
<h3>Note</h3>
<p>
	Maybe some of you aren't familiar with some terms in the statement. Here are some articles that could help you understand the problem correctly:</p>
<ul>
<li>XOR operation: <a href="http://en.wikipedia.org/wiki/Exclusive_or">http://en.wikipedia.org/wiki/Exclusive_or</a></li>
</ul>

<p>
	Also, the stack memory size is quite limited on CodeChef, so a deep recursion may lead to the Runtime Error verdict.
</p>
<h3>Input</h3>
<p>
	The first line of the input contains the integers <b>N</b>, <b>M</b> and <b>K</b>.
</p>
<p>
	The next <b>M</b> lines describe the edges of <b>G</b>; the <b>j</b>'th line contains three integers <b>U<sub>j</sub></b>, <b>V<sub>j</sub></b> and <b>Y<sub>j</sub></b>.
</p>
<p>
	It's guaranteed that <b>G</b> doesn't contain multiple edges and loops.
</p>
<h3>Output</h3>
<p>
	If there is no valid labelling, or less than <b>K</b> valid labellings, the only line of the output should contain <b>-1</b>. Otherwise, the only line of the output should contain <b>N</b> non-negative integers, denoting the <b>K</b>'th lexicographically valid sequence (<b>X<sub>1</sub></b>, <b>X<sub>2</sub></b>, ..., <b>X<sub>N</sub></b>).
</p>
<p>
	It's guaranteed that in the correct sequence all of the values of <b>X<sub>i</sub></b> won't exceed the 32-bit signed integer limit.
</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 200,000(2 × 10<sup>5</sup>);</p>
<p>0 ≤ <b>M</b> ≤ 300,000(3 × 10<sup>5</sup>);</p>
<p>1 ≤ <b>K</b> ≤ 1,000,000,000(10<sup>9</sup>);</p>
<p>1 ≤ <b>U<sub>j</sub></b> ≠ <b>V<sub>j</sub></b> ≤ <b>N</b>;</p>
<p>0 ≤ <b>Y<sub>j</sub></b> &lt; 2<sup>31</sup>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 4 2
1 2 5
1 3 9
2 4 0
2 5 1

<b>Output:</b>
1 4 8 4 5 

</pre><h3>Explanation</h3>
<p>
	The first lexicographically valid sequence is equal to (0, 5, 9, 5, 4);<br /><br />
	The second lexicographically valid sequence is equal to (1, 4, 8, 4, 5) - that's the one that should be printed out as the answer.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-10-2014</td>
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