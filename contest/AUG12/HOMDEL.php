<?php require("../../includes/header.php"); ?><h1>Delivery Boy</h1><div class="content">

<p>Chef has started Home Delivery scheme in one of his restaurants. As the scheme is new , Chef appoints only one employee to deliver food to various locations. The delivery boy who has been appointed is an absent-minded chap. He always forgets to fill fuel in his delivery scooter. So what he does is that whenever Chef sends him for delivery, he goes to the gas station from the restaurant first. He gets his tank filled and then he heads towards his destination. He will do this every single time <i>irrespective of the destination</i>. The delivery boy tries his best to be on time. And to do this, he will choose those paths(from restaurant to gas station AND gas station to destinaion) which cost him the <i>least</i> amount of time. Your task is to tell the Chef how much time can the delivery boy save if he had enough fuel in his scooter i.e. if he went to the destination directly without stopping for fuel (taking the path which costs him least amount of time).</p>
<p>The city has <b>N</b> streets numbered from <b>0</b> to <b>N-1</b>. The restaurant is on street number <b>S</b>, the gas station is on street number <b>G</b> and the food has to be delivered to street <b>D</b> . Note that <b>S, G</b> and <b>D</b>  need <b>not</b> be distinct.</p>
<h3>Input:</h3>
<p>First line of the input contains a single integer <b>N</b>.<br />
Then follows an <b>NxN</b> matrix <b>T</b> which is represented in <b>N</b> lines with <b>N</b> space separated integers on each line.<br />
<b>T[i][j]</b> denotes the time taken to move from the i<sup>th</sup> street to j<sup>th</sup> street. Obviously, <b>T[i][i]</b> = 0. <br />
Next line contains a single integer <b>M</b>, the number of scenarios.<br />
The following <b>M</b> lines contain 3 space separated integers <b>S</b>, <b>G</b> and <b>D</b>.</p>
<h3>Output:</h3>
<p>For each of the <b>M</b> scenarios, output the time taken by the delivery boy to deliver the food and the time he could have saved if he went directly from <b>S</b> to <b>D</b>.<br />
Both these values must be on the same line separated by a single space.</p>
<h3>Constraints:</h3>
<pre>

1 ≤ <b>N</b> ≤ 250
1 ≤ <b>M</b> ≤ 10000
0 ≤ <b>T[i][j]</b> ≤ 100000
0 ≤ <b>S</b>,<b>G</b>,<b>D</b> ≤ <b>N</b>-1

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
4
0 2 1 3
1 0 4 5
3 1 0 3
1 1 1 0
4
0 2 1
0 2 2
3 1 2
3 0 1

</pre><p><b>Output:</b></p>
<pre>
2 0
1 0
3 2
3 2

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-07-2012</td>
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