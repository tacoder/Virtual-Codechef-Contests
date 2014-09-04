<?php require("../../includes/header.php"); ?><h1>IPL Stadium</h1><div class="content">
<h3>Problem description</h3>
<p>
This year's installment of the IPL is fast approaching and India's eclectic array of stadiums will soon be transformed into pulsating cauldrons of color and noise.<br />
In an IPL stadium, there are several rows of seats for the spectators to sit. In each row there are N seats. The tickets given to the spectators in a particular row can have any number from 1 to M printed on them. A ticket checker did not have much time to check everyone's ticket. So he asks his helper boy to find out the ticket which has the minimum even number in a certain range of seats in a row and also to give him the number of tickets of that number in that range. Sometimes, due to security reasons, the ticket checker changes the ticket of a particular person. Again for that he provides his boy with the new ticket and asks him to change the ticket of that person.<br />
 </p>
<h3>Input</h3>
<p>The first line of the input contains two integers N and Q where N is the number of seats in a particular row and Q is the number of queries. The second line of input contains the N ticket numbers of the seats in that row. The next Q lines contain queries in one of the following ways:<br /><br /></p>
<p>1 L R<br /><br />
2 L X<br /><br /></p>
<p>Here, query 1 indicates that the desired ticket and its occurrences are to be determined within range of L and R and query 2 indicates that ticket of person at L is to be changed with X.</p>
<h3>Output</h3>
<p>The number of output lines should be equal to the number of queries of type 1.Every output line should contain two integers denoting the ticket and its occurrences. If no such ticket is present in the range output -1 and 0.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^6</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>500000</b></li>
<li><b>1</b> ≤ <b>M,X</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>L,R</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6 5
1 2 3 4 5 6
1 1 1
1 2 3
1 4 6
2 3 2
1 2 6

<b>Output:</b>
-1 0
2 1
4 1
2 2       
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tusharmakkar08">tusharmakkar08</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-04-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FORT, GO, HASK, JAVA, LISP clisp, LISP sbcl, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>