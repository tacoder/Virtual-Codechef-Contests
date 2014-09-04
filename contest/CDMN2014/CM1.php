<?php require("../../includes/header.php"); ?><h1>Alpha Member</h1><div class="content">
<p> </p>
<p>
<h3>Problem description</h3>
</p>
<p>In the land of Politica, there is a political party called Ache Aadmi Programmers (AAP) in which each member has got connection with at least one other member of the same party. So initially all members of the party are connected to others either directly or through some other members. Also there are some alpha members in the party,These are special members, if they leave the party, the rest of the party will also disintegrate and all the members wont be united or connected anymore. Every member of the party hold certain status value . Since the elections are approaching, corruption in the party has become more prominent. The alpha members, being honest politicians, do not want to continue with this party any further. So all the alpha members have decided to get rid of this corrupted party and form a new party of their own.  With the effect of this decision the AAP party will now get split into several smaller parties.<br />
<br /><br />
Your task is to identify the total number of political parties so formed and and the status value of each party.<br /><br />
<b>NOTE:</b></p>
<ul>
<li>The status value of a party is equal to the summation of status values of all the members comprising that party.</li>
<li>Two members belong to the same party if they have connections to each other either directly or indirectly </li>
<li>when some member leaves the party all those connections that he/she had in the party with other party members doesn't exist anymore</li>
<li> There can be a single member in a party</li>
<li> Alpha members are those special members removing whom, some member say <i>i</i> will no more be connected to <i>j</i> with i ≠ j.<br />
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows</p></li>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of members in the AAP party. The second line contains <b>N</b> space-separated integers <b>S<sub>1</sub></b>, <b>S<sub>2</sub></b>, ..., <b>S<sub>N</sub></b> denoting the status value of each member 
</p><p>The next line contains an integer <b>M</b> denoting the total number of connections within the party then <b>M</b> lines follow<br />
each line contains two space separated Integer <b>a</b> and <b>b</b> which denotes that there is a connection between member <b>a</b> and <b>b</b>.
</p></ul>
<p> </p>
<h3>Output</h3>
<p>  For each test case output the total number of parties formed. In the next line output the status value of the party<br />
formed by the alpha members. If there are no alpha members just output 0. In the next line output the status values of others parties in  increasing order separated by a space.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>10</b></li>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>10<sup>3</sup></b></li>
<li><b>N-1</b>&lt;=<b>M</b>&lt;=<b>N*(N-1)/2</b></li>
<li><b>1</b>&lt;=<b>a,b</b>&lt;=<b>N</b>
</li><li><b> a ≠ b</b>
</li><li><b>1</b>&lt;=<b>status[x]</b> &lt;= <b>100000 </b></li>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
4 1 2 5 3
4
1 2
2 3
2 4
4 5


<b>Output:</b>
4
6
2 3 4
</pre><p> </p>
<h3>Explanation</h3>
<p>In the give testcase member 2 and 4 are alpha members because if they leave, the members of the party will not be connected anymore. After they leave the party, 4 parties will be formed those are {2,4}(alpha members party),{1},{3},{5} with status value 6,4,2,3 respectively.</p>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/phantom11">phantom11</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2014</td>
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
            <td>C, CPP 4.3.2, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>