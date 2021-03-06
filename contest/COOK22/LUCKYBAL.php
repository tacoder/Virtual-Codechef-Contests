<?php require("../../includes/header.php"); ?><h1>Little Elephant and Balance</h1><div class="content">

<p>A Little Elephant from the Zoo of Lviv likes <i>lucky strings</i>, i.e., the strings that consist only of the lucky digits <b>4</b> and <b>7</b>.</p>
<p>The Little Elephant calls some string <b>T</b> of the length <b>M</b> <i>balanced</i> if there exists at least one integer <b>X</b> (<b>1 ≤ X ≤ M</b>) such that the number of digits <b>4</b> in the substring <b>T[1, X - 1]</b> is equal to the number of digits <b>7</b> in the substring <b>T[X, M]</b>. For example, the string <b>S = 7477447</b> is balanced since <b>S[1, 4] = 7477</b> has 1 digit <b>4</b> and <b>S[5, 7] = 447</b> has 1 digit <b>7</b>. On the other hand, one can verify that the string <b>S = 7</b> is not balanced.</p>
<p> The Little Elephant has the string <b>S</b> of the length <b>N</b>. He wants to know the number of such pairs of integers <b>(L; R)</b> that <b>1 ≤ L ≤ R ≤ N</b> and the substring <b>S[L, R] </b> is balanced. Help him to find this number.</p>
<p><b>Notes.</b></p>
<p>Let <b>S</b> be some lucky string. Then</p>
<ul>
<li><b>|S|</b> denotes the length of the string <b>S</b>;
</li>
<li><b>S[i]</b> (<b>1 ≤ i ≤ |S|</b>) denotes the <b>i</b><sup>th</sup> character of <b>S</b> (the numeration of characters starts from <b>1</b>);
</li>
<li> <b>S[L, R]</b> (<b>1 ≤ L ≤ R ≤ |S|</b>) denotes the string with the following sequence of characters: <b>S[L], S[L + 1], ..., S[R]</b>, and is called a <i>substring</i> of <b>S</b>. For <b>L &gt; R</b> we mean by <b>S[L, R]</b> an empty string.
</li>
</ul>
<h3>Input</h3>
<p>The first line of the input file contains a single integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains one string, the string <b>S</b> for the corresponding test case. The input file does not contain any whitespaces.</p>
<h3>Output</h3>
<p>For each test case output a single line containing the answer for this test case.</p>
<h3>Constraints</h3>
<p> 1 ≤ <b>T</b> ≤ 10
</p>
<p> 1 ≤ <b>|S|</b> ≤ 100000
</p>
<p> <b>S</b> consists only of the lucky digits <b>4</b> and <b>7</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
47
74
477
4747477

<b>Output:</b>
2
2
3
23

</pre><h3>Explanation</h3>

<p>In the first test case balance substrings are <b>S[1, 1] = 4</b> and <b>S[1, 2] = 47</b>.</p>
<p>In the second test case balance substrings are <b>S[2, 2] = 4</b> and <b>S[1, 2] = 74</b>.</p>
<p><b>Unfortunately, we can't provide you with the explanations of the third and the fourth test cases. You should figure it out by yourself. Please, don't ask about this in comments.</b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-03-2012</td>
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