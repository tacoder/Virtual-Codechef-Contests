<?php require("../../includes/header.php"); ?><h1>Correct Incorrect Predictions</h1><div class="content">
<p><b>Problem Description</b></p>
<p>Elections are getting closer and people have started speculating who is </p>
<p>going to be their next PM. The media is also involved and it starts conducting </p>
<p>opinion polls in all the constituencies. In one such opinion poll which is done </p>
<p>for the Bharatiya Java Party (BJP), the media lists all the constituencies in </p>
<p>alphabetical order, conducts surveys and then reports the results as a string </p>
<p>of W's and L's. A <i>W</i> indicates that the BJP is winning that constituency </p>
<p>and an L indicates the it is losing it.</p>
<p>Shri Chaiwala, the PM candidate for BJP is however not very happy with the </p>
<p>opinion polls. He feels that the media is biased towards the other parties and </p>
<p>has intentionally given incorrect results. So he calls for a press conference </p>
<p>and quotes that "The media has not given correct predictions. They have </p>
<p>generated the results using a fake program. This program can give the correct </p>
<p>results for atmost <i>P</i> consecutive constituency and incorrect results for </p>
<p>atmost <i>Q</i> consecutive constituency."</p>
<p>Your task is to help Shri Chaiwala find the maximum number of constituency </p>
<p>they could win if the predictions can have atmost <i>P</i> consecutive correct </p>
<p>results and atmost <i>Q</i> consecutive incorrect results.</p>
<p><b>Input</b></p>
<p>The first line of the input consists of the number of cases (T). T test </p>
<p>cases follows. Each test case has 2 lines. The first line contains 2 numbers P </p>
<p>and Q separated by a space. The next line contains a string of W's and L's </p>
<p>which is the prediction given by the media.</p>
<p><b>Output</b></p>
<p>For each test case, output a single line containing the maximum number of </p>
<p>seats that BJP could win.</p>
<p><b>Constraints</b></p>
<pre>
T ≤ 50<br />
1 ≤ P, Q ≤ 100<br />
1 ≤ |prediction string| ≤ 100<br />
</pre><p><b>Sample Cases</b></p>
<pre>
3
2 2
WW
2 2
WWWW
1 1
WL
</pre><p><b>Output</b></p>
<pre>
2
3
2
</pre><p><b>Explanations</b><br />
Lets denote C for a Correct prediction and I for an Incorrerct prediction.</p>
<ul>
<li>In the first case, P and Q are 2. So you can have atmost 2 consecutive
<p>correct and atmost 2 consecutive incorrect predictions. The possible strings </p>
<p>are CC, CI, IC, II. If we apply these strings on the predictions, then the </p>
<p>seats BJP can win are - 2 (CC), 1 (CI) , 1 (IC) and 0 (II). Therefore the </p>
<p>answer is 2.</p></li>
<li>In the second case, we can get 2 seats by applying 2 correct predictions
<p>anywhere. However we can get 3 by using CCIC.</p></li>
<li>If we use CI, because the first prediction is correct, BJP wins 1 seat and because the second prediction is incorrect( i.e. L is incorrect there) so they win that seat too. So answer is 2.</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/phantom11">phantom11</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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