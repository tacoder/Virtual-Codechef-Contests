<?php require("../../includes/header.php"); ?><h1>Little Elephant and Bamboo</h1><div class="content">
<h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/LEBAMBOO.pdf">here</a></h3>

<h3>Problem Statement</h3>
<p>Little Elephant from Zoo of Lviv likes bamboo very much. He currently has <b>n</b> stems of bamboo, <b>H<sub>i</sub></b> - height of <b>i-th</b> stem of bamboo (0-based numeration). 

</p><p>Today inspector Andrii from World Bamboo Association is visiting the plantation. He doesn't like current situation. He wants the height of <b>i-th</b> stem to be <b>D<sub>i</sub></b>, for each <b>i</b> from <b>0</b> to <b>n-1</b>, inclusive.

</p><p>Little Elephant is going to buy some special substance. One bottle of such substance he can use to single stem of bamboo. After using substance for stem <b>i</b>, the height of <b>i-th</b> stem is decrased by <b>1</b> and the height of <b>j-th</b> stem is increased by <b>1</b> for each <b>j</b> not equal to <b>i</b>. Note that it is possible for some of the stems to have negative height, but after all transformations all stems should have positive height.

</p><p>Substance is very expensive. Help Little Elephant and find the minimal number of bottles of substance required for changing current plantation to one that inspector wants. If it's impossible, print <b>-1</b>.

<h3>Input</h3>
</p><p>First line contain single integer <b>T</b> - the number of test cases. <b>T</b> test cases follow. First line of each test case contains single integer <b>n</b> - the number of stems in the plantation. Second line contains <b>n</b> integers separated by single space - starting plantation. Next line of each test case contains <b>n</b> integers - plantation that inspector Andrii requires.

<h3>Output</h3>
</p><p>In <b>T</b> lines print <b>T</b> integers - the answers for the corresponding test cases.

<h3>Constraints</h3>

</p><p>
1 &lt;= <b>T</b> &lt;= 50
</p><p>
1 &lt;= <b>n</b> &lt;= 50
</p><p>
1 &lt;= <b>H<sub>i</sub>, D<sub>i</sub></b> &lt;= 50

<h3>Example</h3>

<pre>
<b>Input:</b>
3
1
1
2
2
1 2
2 1
3
3 2 2
4 5 3


<b>Output:</b>
-1
1
5

</pre></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-04-2012</td>
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