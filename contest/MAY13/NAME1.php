<?php require("../../includes/header.php"); ?><h1>Name Reduction</h1><div class="content">

<p>In an attempt to reduce the growing population, <b>Archer</b> was asked to come up with a plan. <b>Archer</b> being as intelligent as he is, came up with the following plan:</p>
<p>If <b>N</b> children, with names <b>C<sub>1</sub>, C<sub>2</sub>, ..., C<sub>N</sub></b>, are born to parents with names <b>A</b> and <b>B</b>, and you consider <b>C</b> to be the <a href="http://en.wikipedia.org/wiki/Concatenation">concatenation</a> of all the names of the children, i.e. <b>C = C<sub>1</sub> + C<sub>2</sub> + ... + C<sub>N</sub></b> (where <b>+</b> is concatenation operator), then <b>C</b> should be a substring of one of the permutations of <b>A + B</b>.</p>
<p>You are given the task to verify whether the names parents propose to give their children are in fact permissible by Archer's plan or not.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. Each test case stats with a line containing two space separated strings <b>A</b> and <b>B</b>, denoting the names of the parents. The next line contains a single integer <b>N</b> denoting the number of children <b>A</b> and <b>B</b> are planning to have. Following this are <b>N</b> lines, the <b>i'th</b> line containing <b>C<sub>i</sub></b>, the proposed name for the <b>i'th</b> child.</p>
<h3>Output</h3>
<p>For each test case output a single line containing <code>"YES"</code> if the names are permissible by Archer's plan, otherwise print <code>"NO"</code>. (quotes are meant for clarity, please don't print them)</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 ≤  T ≤ 100 </b></li>
<li><b> 1 ≤ N ≤ 1000 </b></li>
<li><b> The lengths of all the strings including A, B, and all C<sub>i</sub> will be in the range [1, 40000], both inclusive. All these strings will contain only lowercase English letters.</b></li>
<li><b>The combined lengths of all names of children will not exceed the combined length of the names of their parents.</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
tom marvoloriddle
2
lord
voldemort
cheap up
1
heapcup
bruce wayne
2
bat
man

<b>Output:</b>
YES
YES
NO
</pre><h3>Explanation:</h3>
<p>Let <b>Y</b> denote the concatenation of names of all the children, and <b>X</b> denote the concatenation of the names of the parents.</p>
<p> <b>Case 1:</b> Here <b>X = "tommarvoloriddle"</b>, and <b>Y = "lordvoldemort"</b>. Consider <b>Z = "iamlordvoldemort"</b>. It is not difficult to see that <b>Z</b> is a permutation of <b>X</b> and <b>Y</b> is a substring of <b>Z</b>. Hence <b>Y</b> is a substring of a permutation of <b>X</b>, so the answer is "YES".</p>
<p> <b>Case 2:</b> Here <b>X = "cheapup"</b>, and <b>Y = "heapcup"</b>. Since <b>Y</b> in itself is a permutation of <b>X</b>, and as every string is a substring of itself, <b>Y</b> is a substring of <b>X</b> and also a permutation of <b>X</b>. Hence "YES".</p>
<p> <b>Case 3:</b> Here <b>X = "brucewayne"</b>, and <b>Y = "batman"</b>. As "t" is not present in <b>X</b>, "t" wont be present in any permutation of <b>X</b>, hence the answer is "NO".</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2013</td>
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