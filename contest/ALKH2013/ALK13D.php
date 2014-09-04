<?php require("../../includes/header.php"); ?><h1>Jack And Rum</h1><div class="content">
<p>Jack Sparrow, sorry Captain Jack Sparrow, is out of rum. He needs to send some of his crew members to rob Tortuga's rum deposits. Tortuga's rum deposits have <b>infinite</b> number of bottles and each of them is labelled uniquely by a <b>bottle_id</b> as an integer starting from <b>0</b>, ranging ofcourse till infinity without any missing integer. The infinite resource of these bottles must be well secured by Tortuga. As a result, <b>P</b> bottles having continuous numbers are grouped into one secure base. Thus, first <b>P</b> bottles starting from <b>bottle_id 0</b> are secured in the first base, then next <b>P</b> bottles in next base and so on till infinity. Tortuga's people are attracted to prime numbers, thus <b>P</b> is always chosen to be a prime. The secure bases are identified with a special <b>base_id</b> defined by the minimum bottle_id of all the bottles present in the base. The <b>base_id</b> for each base also stores a special information about that base for the administration of Tortuga. It secretly represents the number of security gates that the particular base have as protection from robbery.</p>
<p>Jack being a brilliant captain came up with an ingenious plan to rob Tortuga. He analysed the complete distribution of rum bottles and the amount of security associated with each base. He decided that the robbery will be done in <b>N</b> phases and apparently there are exactly <b>N</b> persons in Jack's crew excluding Jack. Jack, being coward, never goes for a robbery.</p>
<p>In each phase, Jack selects a secure base as target of rum and tries to rob it. In the <b>i<sup>th</sup></b> <b>(1 &lt;= i &lt;= N)</b> phase, Jack will make a group of size <b>i</b> from the crew, and send the group to rob the selected base. After these crew members return, again a group of size <b>i</b> is formed from the crew and sent to the same base, and so forth. Each such group must have at least one different member when compared from all the groups previously sent in this phase. Simply saying, the exact same group of people can never be sent twice in one phase. Observe carefully that though each crew member can be sent many times as part of different groups, but the group as a whole can be sent only once. The phase continues until there are no possible distinct group of size <b>i</b> that could be formed out of the crew.</p>
<p>Each group sent performs a particular task. They must break exactly one gate of the target base chosen for that robbery phase. Thus, a  phase is successful if and only if the total number of groups sent in that phase is exactly equal to the number of gates of the target secure base. In all other cases, the phase is a failure implying that no rum is robbed and all the security gates of the selected base are restored making them again equal to their <b>base_id</b>. In the case of a successful robbery, the members bring back all the rum bottles present in that base. Once, a particular base has been robbed successfully, the security men of Tortuga captures the base and no further attempt can be made on that base in any of the succeeding phases.</p>
<p>As an admirer of Jack, you need to output the number of rum bottles that jack will get at the end of the whole robbery, assuming that Jack plans all the phases optimally maximizing the number of bottles he can rob. Since the number of bottles can be huge, you need to output the answer modulo <b>1,000,000,007</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />Each test case contains only one line having two integers, <b>P</b> and <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single integer representing the number of rum bottles that Jack successfully robbed modulo <b>1,000,000,007</b>.</p>
<h3>Constraints:</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>100000</b></li>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>10<sup>18</sup></b></li>
<li><b>1</b> &lt;= <b>P</b> &lt;= <b>10<sup>9</sup></b></li>
<li><b>P</b> will be a prime number.</li>
</ul>
<h3>Example</h3>
<pre><b>Input</b>
2
2 2
3 2
</pre><pre><b>Output</b>
2
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divanshu">divanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
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