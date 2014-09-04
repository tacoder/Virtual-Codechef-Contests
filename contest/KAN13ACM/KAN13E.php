<?php require("../../includes/header.php"); ?><h1>Chocolate Division</h1><div class="content">
<p>Alice and Bob have got some chocolates as a gift. There are 2 types of chocolates. Some chocolates have the shape of a sphere and some chocolates have the shape of a stick. Each chocolate stick connects a pair of chocolate sphere. They want to divide these chocolates and they seek your help. They want all of the chocolate spheres for themselves. Alice loves chocolate sticks. For all of the chocolate spheres she gets, each pair of them should be connected by a stick. Bob dislikes chocolate sticks. For all of the chocolate spheres he gets, no pair of them should be connected by a stick. To be clear, if any two chocolate spheres are connected by a chocolate stick initially he will take at most one of them but not both. They do not care about the sticks that connect a sphere of Alice and a sphere of Bob. You can choose to eat them. Given the description of the chocolate spheres and chocolate sticks, determine if you can divide those chocolate spheres among Alice and Bob, satisfying both of their preferences. </p>
<h3>Input</h3>
<p>
First line of the input contains <b>T</b>, the number of test cases. Each test case starts with 2 integers <b>N</b> and <b>M</b>. <b>N</b> is the number of chocolate spheres (The chocolate spheres are numbered from 1 to <b>N</b>) and <b>M</b> is the number of chocolate sticks connecting them. Each of the next <b>M</b> lines contains 2 integers, <b>a</b> and <b>b</b>, denoting that the chocolate sphere with number <b>a</b> is connected to a chocolate sphere with number <b>b</b>.
</p>
<h3>Output</h3>
<p>For each test case output "YES" if you can divide the chocolate spheres and "NO" otherwise.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 100</p>
<p>1 &lt;= <b>N</b> &lt;= 500</p>
<p>0 &lt;= <b>M</b> &lt;= n * (n - 1) / 2</p>
<p>For a pair of chocolate spheres, there will be at most one stick that is connecting them.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
4 4
1 2
1 4
2 3
3 4
5 4
1 2
1 3
1 4
1 5
10 0
3 3
1 2
1 3
2 3

<b>Output:</b>
NO
YES
YES
YES
</pre>
<p><b>
<p>Problem Setter : Abdullah Al Mahmud</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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