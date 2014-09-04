<?php require("../../includes/header.php"); ?><h1>The scholars party</h1><div class="content">

<p>In the field of algorithmic research, a researcher is recognized by the number of years(Y) he/she has been working as a professor in an educational institution of national importance, and the number of research papers(P) he/she has published in international journals. Any two researchers <i>i</i> and <i>j</i> hate each other if one of the following conditions, holds<br/> </br/></p>
<ul>
<li><b>Y<i>i</i> >= Y<i>j</i> and P<i>j</i> >= P<i>i</i></b></li>
<li><b>Y<i>j</i> >= Y<i>i</i> and P<i>i</i> >= P<i>j</i></b>
</li>
</ul>
<p> <br/><br />
If both the attributes of a researcher <i>i</i>, are strictly greater than those of researcher <i>j</i>, then <i>i</i> is so eminent for <i>j</i> that <i>i</i> will ignore <i>j</i> and <i>j</i> will respect <i>i</i>.<br />
The president of ACM, Mr. X is throwing a party on the occasion of his son graduating as a Ph.D in Computer Science. He has a list of researchers he wants to invite but he doesn't want to invite them all because after a couple of drinks the haters may start heated discussions and hence will spoil the party. So he wants to choose a subset of the researchers such that no two of them hate each other. As his student, help him find how many people he can invite at max.<br />
</br/></p>
<h3>Input</h3>
<p>First line of input is the number of researchers <i>n</i> that he knows, after which <i>n</i> lines follow each representing the attributes of a researchers separated by a space i.e. Y P.</p>
<h3>Output</h3>
<p>Single integer i.e. the maximum number of people that can be invited in the party.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 &lt;= n &lt;= 10000</b></li>
</ul>
<h3>Example 1</h3>
<pre>
<b>Input:</b>
4
1 4
2 3
5 2
4 3
<b>Output:</b>
1
</pre><h3>Example 2</h3>
<pre>
<b>Input:</b>
6
2 3
3 5
3 7
4 6
4 8
5 7
<b>Output:</b>
4
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prabhakar97">prabhakar97</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ASM, BASH, C, C99 strict, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, ERL, GO, HASK, JAVA, JS, LISP clisp, LISP sbcl, LUA, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>