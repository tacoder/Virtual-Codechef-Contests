<?php require_once("../../includes/header.php"); ?><h1>Matryoshka Dolls</h1><div class="content">
<p><span>The Cricket World Cup 2015 is nearing and it will be held in Australia and New Zealand. The organizing committee is planning to give a welcome gift to each team member. After careful thought and planning, they have decided on Matryoshka dolls.&nbsp;</span></p>
<p>A Matryoshka doll refers to a set of wooden dolls of strictly decreasing size, placed one inside the other. Any doll can contain only one doll directly inside it.</p>
<p>Given the sizes of N dolls, output &quot;YES&quot; if it is possible to nest them all and have one doll on the outside and &quot;NO&quot; otherwise.</p>
<p><strong>Input -</strong><br /> The input starts with T denoting the number of test cases. For each test case, the first line contains N, which is the total number of dolls.<br /> The second line contains N space separated integers denoting the size of the dolls.</p>
<p><strong>Output -&nbsp;</strong><br /> Print &ldquo;YES&rdquo; if the dolls can be nested inside each other and &ldquo;NO&rdquo; otherwise. (quotes for clarity)</p>
<p><strong>Constraints -</strong><br /> 1 &lt;= T &lt;= 100<br /> 1 &lt;= N &lt;= 100<br /> 1 &lt;= doll size &lt;= 1000</p>
<p><strong>Sample Input -</strong>&nbsp;<br /> 3<br /> 3<br /> 3 1 1<br /> 2&nbsp;<br /> 1 2<br /> 4<br /> 10 2 5 3<br /> &nbsp;</p>
<p><strong>Sample Output -</strong><br /> NO<br /> YES<br /> YES</p>
<p><strong>Explanation -</strong><br /> For the first case, there are 2 dolls of size 1 and hence cannot be nested inside each other.<br /> For the second case, the doll with size 1 can be put inside the doll with size 2.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/murdocc007">murdocc007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>