<?php require("../../includes/header.php"); ?><h1>Virus</h1><div class="content">

<p>IEM(International Energitic Medical Board) has received a sample of viruses. The sample contain exactly N types of virus. Each type is recognised by a unique value(So, N values are necessarily DISTINCT).<br />IEM has also received some statistics forecasting the behaviours of the viruses.This provided mainly three ideas:-<br /><br />
<b>1.The initial number of each type of viruses,I( in other words, initially all type of viruses have same count ie I )
<p>
2.Information regarding Q days about the behaviour of viruses. For each day, they have given 3 integers X,Y and V which means ALL THE TYPES PRESENT in the sample whose values are in between X and Y(both inclusive) will have an increase in number by value V.
</p><p>
3.Information about the critical virus at the end of each of Q days. For each day, they provide one integer R which means if all the viruses (generated TILL THE END OF THAT DAY) are sorted, in ascending order of their values, then the virus at position R in the sorted list is termed as "CRITICAL VIRUS"(the starting position in the list is '1' ie the list has '1' based indexing)</p></b></p>
<p>Scientists working at IEM need to know the<b> TYPE-VALUE of the critical virus at the end of each day</b>,but as they are too energitic, they cannot wait for Q long days to have the list of critical viruses.So, they are asking you to help them.</p>
<h3>Input</h3>
<p>
1st line contains one integer N<br /><br />
2nd line contains N space separated integers which denote values associated with the types present in the sample(they are distinct)<br /><br />
3rd line contain I and Q separated by a spoace<br />
Each of the following Q lines will have exactly 4 integers X,Y,V and R separated by spaces.<br /><br /><br />
(the meanings of N,Q,X,Y,V and R are as described in the problem)</p>
<h3>Output</h3>
<p>Output exactly Q lines corresponding to Q days.Each line should contain an integer denoting the type-value of the critical virus among the viruses generated till the end of that day.</p>
<p>*NOTE:R has nothing to do with X,Y &amp; V particularly on that day, rather it denotes the position in the whole sorted list of viruses generated upto that day.<br /><br />
type-value of a virus is typically the value associated with its type.<br /><br />
don't assume N values (defining N different types) initially given are some permutation of the numbers from 1 to N. <br /><br />
the types which are not present in the sample, are need not to be considered during updating the sample...</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
9 3 5 1 6
2 3
3 6 1 1
1 3 3 11
5 9 2 20


<b>Output:</b>
1
3
6


<b>Constraints:</b>
1&lt;=N&lt;=100000
1&lt;=type-value&lt;=2*10^9
1&lt;=Q&lt;=200000
1&lt;=I&lt;=10000
1&lt;=X&lt;=Y&lt;=2*10^9
1&lt;=V&lt;=10000
1&lt;=R&lt;=total_no_of_viruses_generated_at_that_time
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/encoded_admin">encoded_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2011</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>