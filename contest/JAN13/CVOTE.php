<?php require("../../includes/header.php"); ?><h1>Chef of the Year</h1><div class="content">

<p>Chefs from all over the globe gather each year for an international convention. Each chef represents some country. Please, note that more than one chef can represent a country.</p>
<p>Each of them presents their best dish to the audience. The audience then sends emails to a secret and secure mail server, with the subject being the name of the chef whom they wish to elect as the <b>"Chef of the Year"</b>.</p>
<p>You will be given the list of the subjects of all the emails. Find the country whose chefs got the most number of votes, and also the chef who got elected as the <b>"Chef of the Year"</b> (the chef who got the most number of votes).</p>
<p><b>Note 1</b></p>
<p>If several countries got the maximal number of votes, consider the country with the lexicographically smaller name among them to be a winner. Similarly if several chefs got the maximal number of votes, consider the chef with the lexicographically smaller name among them to be a winner.</p>
<p><b>Note 2</b></p>
<p>The string <b>A</b> = <b>a<sub>1</sub>a<sub>2</sub>...a<sub>n</sub></b> is called lexicographically smaller then the string <b>B</b> = <b>b<sub>1</sub>b<sub>2</sub>...b<sub>m</sub></b> in the following two cases:</p>
<ul>
<li>there exists index <b>i</b> &le; <b>min{n, m}</b> such that <b>a<sub>j</sub></b> = <b>b<sub>j</sub></b> for <b>1 &le; j &lt; i</b> and <b>a<sub>i</sub></b> &lt; <b>b<sub>i</sub></b>;</li>
<li><b>A</b> is a proper prefix of <b>B</b>, that is, <b>n &lt; m</b> and <b>a<sub>j</sub></b> = <b>b<sub>j</sub></b> for <b>1 &le; j &le; n</b>.</li>
</ul>
<p>The characters in strings are compared by their ASCII codes.</p>
<p>Refer to function <b>strcmp</b> in C or to standard comparator <b>&lt;</b> for <b>string</b> data structure in C++ for details.</p>
<h3>Input</h3>
<p>The first line of the input contains two space-separated integers <b>N</b> and <b>M</b> denoting the number of chefs and the number of emails respectively. Each of the following <b>N</b> lines contains two space-separated strings, denoting the name of the chef and his country respectively. Each of the following <b>M</b> lines contains one string denoting the subject of the email.</p>
<h3>Output</h3>
<p>Output should consist of two lines. The first line should contain the name of the country whose chefs got the most number of votes. The second line should contain the name of the chef who is elected as the <b>"Chef of the Year"</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &le; <b>N</b> &le; <b>10000</b> (<b>10<sup>4</sup></b>)</li>
<li><b>1</b> &le; <b>M</b> &le; <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li>Each string in the input contains only letters of English alphabets (uppercase or lowercase)</li>
<li>Each string in the input has length not exceeding <b>10</b></li>
<li>All chef names will be distinct</li>
<li>Subject of each email will coincide with the name of one of the chefs</li>
</ul>
<h3>Example 1</h3>
<pre>
<b>Input:</b>
1 3
Leibniz Germany
Leibniz
Leibniz
Leibniz

<b>Output:</b>
Germany
Leibniz
</pre><h3>Example 2</h3>
<pre>
<b>Input:</b>
4 5
Ramanujan India
Torricelli Italy
Gauss Germany
Lagrange Italy
Ramanujan
Torricelli
Torricelli
Ramanujan
Lagrange

<b>Output:</b>
Italy
Ramanujan
</pre><h3>Example 3</h3>
<pre>
<b>Input:</b>
2 2
Newton England
Euclid Greece
Newton
Euclid

<b>Output:</b>
England
Euclid
</pre><h3>Explanation</h3>
<p><b>Example 1.</b> Here we have only one chef <b>Leibniz</b> and he is from <b>Germany</b>. Clearly, all votes are for him. So <b>Germany</b> is the country-winner and <b>Leibniz</b> is the <b>"Chef of the Year"</b>.</p>
<p><b>Example 2.</b> Here we have chefs <b>Torricelli</b> and <b>Lagrange</b> from <b>Italy</b>, chef <b>Ramanujan</b> from <b>India</b> and chef <b>Gauss</b> from <b>Germany</b>. <b>Torricelli</b> got 2 votes, while <b>Lagrange</b> got one vote. Hence the <b>Italy</b> got 3 votes in all. <b>Ramanujan</b> got also 2 votes. And so <b>India</b> got 2 votes in all. Finally <b>Gauss</b> got no votes leaving <b>Germany</b> without votes. So the country-winner is <b>Italy</b> without any ties. But we have two chefs with 2 votes: <b>Torricelli</b> and <b>Ramanujan</b>. But since the string <b>"Ramanujan"</b> is lexicographically smaller than <b>"Torricelli"</b>, then <b>Ramanujan</b> is the <b>"Chef of the Year"</b>.</p>
<p><b>Example 3.</b> Here we have two countries with 1 vote: <b>England</b> and <b>Greece</b>. Since the string <b>"England"</b> is lexicographically smaller than <b>"Greece"</b>, then <b>England</b> is the country-winner. Next, we have two chefs with 1 vote: <b>Newton</b> and <b>Euclid</b>. Since the string <b>"Euclid"</b> is lexicographically smaller than <b>"Newton"</b>, then <b>Euclid</b> is the <b>"Chef of the Year"</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-12-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
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