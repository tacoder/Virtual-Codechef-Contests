<?php require("../../includes/header.php"); ?><h1>Love Magic</h1><div class="content">

<p>This valentine day,a rose-shopkeeper prayed to god to give him some magical power such that he could earn a lot<br />
of money.God listened to him &amp; agreed to give him LOVE-MAGIC.But God mentioned some conditions which the<br />
shop-keeper would have to follow to learn that MAGIC.<br/><br />
CONDITIONS:<br/><br />
1.God will give him the &lsquo;n&rsquo; roses to sell &amp; the shop-keeper is&rsquo;nt allow to sell any extra roses.<br/><br />
2.He has to provide each of his customer an id number.The 1st customer will have the id 1,2nd will have 2<br />
&amp; so on upto &lsquo;n&rsquo; &amp; he isn&rsquo;t allowed to sell roses to a customer who doesn&rsquo;t have any id.So he can only sell to &lsquo;n&rsquo;<br />
customers.<br/><br />
If the shop-keeper agreed to fulfilled these conditions then God will help him with the MAGIC.The<br />
functionalities of the MAGIC are:<br/><br />
1.The ith id customer will surely buy i number of roses.<br/><br />
2.after selling roses to kth id customer, the shop-keeper will be amazed to see that &lsquo;k&rsquo; number of roses<br />
added to his stock.<br/><br />
3.The ith id customer will surely pay the amount equals to, the square of the number of ways he can<br />
choose those &lsquo;i&rsquo; roses from the stock multiplied by that customer&rsquo;s id number.<br/><br />
4.This magic will work for each &lsquo;i&rsquo; &amp; &lsquo;k&rsquo; where 1&lt;=i,k&lt;=n;<br/><br />
NOTE: Each customer can buy only once &amp; then his id will be invalid &amp; at any instance of time in the stock the<br />
shop-keeper will have all the roses distinct from each other.<br/><br />
CONSTRAINT:<br/><br />
1&lt;=T&lt;=1000;<br/><br />
1&lt;=n&lt;=10^6;<br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>Suppose that day the shop-keeper fulfilled the conditions &amp; the magic works &amp; he able to sell to all the &lsquo;n&rsquo;<br />
customers.Now,first line of the input an integer &lsquo;T&rsquo; will be given indicating the number of test case.Then in<br />
following &lsquo;T&rsquo; lines,each contains an integer which is the value of &lsquo;n&rsquo;.<br/></br/></p>
<h3>Output</h3>
<p>For each test case You have to say how much amount the shop-keeper earns that day.Mind it the output<br />
will be a huge number so give your answer in modulo (10^9+7),Separate each answer corresponds to each test<br />
case with a new line character.<br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
2
3


<b>Output:</b>
1
6
30

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jishnuunique">jishnuunique</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2012</td>
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