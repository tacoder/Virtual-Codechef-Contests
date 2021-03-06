<?php require("../../includes/header.php"); ?><h1>Substrings on a Tree</h1><div class="content">

<p>Chefland scientists have made a new invention! They developed a new way to represent a string with <b>N</b> symbols: consider a tree with <b>N</b> vertices, rooted at the first vertice. For each vertice, a single latin letter is written. So we have obtained a "<b>treestring</b>". The scientists haven't decided yet how the treestring should be pronounced, but they have invented a definition of a <b>substring for a treestring</b>. A string is a <b>substring of a treestring</b> if and only it can be obtained by moving from some vertice to its descendant and writing out all the letters from vertices that occured on this path in the order they have appeared. For example, consider the following treestring :</p>
<p><img src="http://www.codechef.com/download/tsubstr.png" /></p>
<p>
The string "ba" is a <b>substring</b> of a given treestring because it can be obtained by moving from vertice <b>4</b> to vertice <b>6</b>, the string "abb" is also a substring of this treestring - it can be obtained by moving from the root to vertice <b>5</b>. However the string "cb" is <b>not a substring</b> of this treestring because there is no way from any vertice to its descendant in such a way that the sequence of letters is "cb".</p>
<p>Now the Chefland researchers ask you to help them with the treestring research.<br />
They have given you a treestring with <b>N</b> vertices.<br />
Please output the number of <b>distinct</b> substrings of a given treestring (including the empty one).<br />
Then, <b>Q</b> queries will follow.<br />
For the <b>i</b>-th query, the permutation <b>P<sub>i</sub></b> of <b>26</b> latin alphabet letters and an integer <b>K<sub>i</sub></b> will be given.<br />
That means that if we sort all distinct substrings of the given treestring according to the <b>alphabetical order described in P<sub>i</sub></b>, you will have to output the <b>K<sub>i</sub></b>-th string.<br />
"According to the alphabetical order described in <b>P<sub>i</sub></b>" means that letter <b>X</b> is lexicographically smaller that letter <b>Y</b> if and only <b>X</b> appears<br />
in <b>P<sub>i</sub></b> earlier than <b>Y</b>. For example if the <b>alphabetical order</b> is "cbadefghijklmnopqrstuvwxyz", then letter "c" is <b>lexicographically smaller</b> than letter "a" because "c" is the first symbol of this permutation, and "a" is the third symbol of this permutation, therefore 1&lt;3 and for the given arrangement, "c" is <b>alphabetically less</b> than "a".<br />
Here note that the string <b>A</b> is smaller than the string <b>B</b> (that means <b>A</b> comes earlier than <b>B</b><br />
after sorting) if and only if<br />
<b>A</b> is a prefix of <b>B</b>,<br />
or <b>A<sub>i</sub></b> = <b>B<sub>i</sub></b> (for all <b>i</b> &lt; <b>k</b>) and <b>A<sub>k</sub></b> &lt; <b>B<sub>k</sub></b> (in terms of alphabetical order)<br />
where <b>A<sub>i</sub></b> denotes the <b>i</b>-th letter of <b>A</b>.</p>
<h3>Constraints</h3>
<p><ul>
<li>1&lt;=<b>N</b>&lt;=250000</li>
<li>1&lt;=<b>Q</b>&lt;=50000</li>
<li>1&lt;=<b>K<sub>i</sub></b>&lt;=9223372036854775807 (2^63-1)</li>
<li>Output will not exceed 800 KB.</li>
<li>It is guaranteed that the N lowercase latin letters have been generated randomly.</li>
</ul>
</p>
<p></p>
<h3>Input</h3>
<p>The first line of input consists of two integers - <b>N</b> and <b>Q</b>.<br />Then, a string composed of <b>N</b> lowercase latin letters follow.</p>
<p>Then, <b>N-1</b> lines follow. Each line is composed of <b>two</b> numbers - <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>. It means that there is an edge between vertice <b>X<sub>i</sub></b> and vertice <b>Y<sub>i</sub></b>.</p>
<p>Then, <b>Q</b> lines follow. Each line consists of a permutation of <b>26</b> lowercase latin letters <b>P<sub>i</sub></b> and an integer <b>K<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>Output <b>Q+1</b> lines. On the first line output a single integer - the number of <b>distinct</b> substrings of a given treestring. The following <b>Q</b> lines should contain answers to the queries. <b>I</b>-th line should contain an answer to <b>i</b>-th query or a string <b>"-1"</b> if it is impossible<br />
to find <b>K<sub>i</sub></b>-th string for <b>i</b>-th query.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
8 4
abcbbaca
1 2
2 3
1 4
4 5
4 6
4 7
1 8
abcdefghijklmnopqrstuvwxyz 5
abcdefghijklmnopqrstuvwxyz 1
bcadefghijklmnopqrstuvwxyz 5
abcdefghijklmnopqrstuvwxyz 100

<b>Output:</b>
12
aba

ba
-1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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