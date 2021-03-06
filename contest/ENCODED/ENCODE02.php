<?php require("../../includes/header.php"); ?><h1>Ice-Cream Mania</h1><div class="content">

<p>Joy is very fond of ice-creams. The road from Joy's house to IEM is full of ice-cream parlors.So naturally on his way to college everyday he stops his bicycle by the road side to have the best ice cream and hence even though he starts early morning from his home he fails to reach college in time. It is campussing time now.Subhabrata sir has warned him of the severe actions that might be taken against him if he comes late there too.So he can't afford to be so careless anymore, but he can't give up his fascination for ice-cream either. So Joy has figured out that there is only a continuous part of the road that remains crowded and a huge rush occurs in the ice-parlors within that area only and hence choosing an ice-cream parlor within that area makes him loose time for college. Ice-parlors outside this area are pretty empty and there he can get his orders served very quicky and it won't hamper his time much. He already knows the the quality of ice-creams available at each of the ice-parlors from his experience of all these years. However it is difficult to know which particular part of the road will remain crowded the next day. But nothing much to worry, there is a new Radio station which gives traffic forecast. Every night he listens to that traffic forecast to know which one continuous part of the road will remain crowded the next day. So guys it's your turn to help Joy to have <b>the best possible ice-cream and also reach college in time.</b></p>
<h3>Input</h3>
<p>
1st line: an Integer N denoting the number of ice-parlors on the road.<br />
2nd line: N integers from A1 to AN separated by a single space.Integer Ai denote the quality of ice-creams available at the ith ice-parlor on the road. Higher the value of Ai better is the quality of ice-cream.<br />
3rd line: integer Q denoting number of days that joy checks the traffic forecast.<br />
Next Q lines:2 integers  Xi and Yi separated by a single space denoting the starting and ending of the region(both inclusive and staring from 1) that will remain crowded on the ith  day </p>
<h3>Output</h3>
<p>Q integers one on each line:<br />
ith line contains an integer denoting the best possible ice-cream that Joy can eat on the ith day. If he can not buy any ice-cream print zero for that day.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
10
2 5 9 8 7 1 6 5 8 7
2
4 7
3 8


<b>Output:</b>
9
8


<h3>CONSTRAINTS:</h3>
1 &lt;= N &lt;= 200000
0 &lt;= Ai &lt;= 214783647
1 &lt;= Q &lt;= 100000
1 &lt;= Xi &lt;= Yi &lt;= N

</pre><h3>Explanation:</h3>
<p>N=10,<br />
On the first day if he selects an ice-cream parlor between 8,7,1,6 lying continuously at 4th,5th ,6th, 7th position respectively he will become late so he has to chose the best among the rest which is 9 lying at location 3. Similarly on 2nd day he can not chose between  9,8,7,1,6,5 lying from 3rd to 8th position.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/encoded_admin">encoded_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2011</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>