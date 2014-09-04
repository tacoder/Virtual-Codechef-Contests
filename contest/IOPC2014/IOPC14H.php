<?php require("../../includes/header.php"); ?><h1>Catering Services</h1><div class="content">
<p>Bob, a famous foodie of IIT Kanpur, tired of studying, decides to go into catering startup. Bob plans to cater to the offices located in Kanpur. In Kanpur, all the offices are in some or other apartments. Also, the offices in the same building have same lunch time. Bob, being a good negotiator, acquired contracts for round the clock catering from all offices of <strong>N</strong> apartments in the city.<br /><br /></p>
<p>For the <strong>N</strong> apartments in the city, <strong>i</strong>-th apartment housing <strong>X[i]</strong> offices and and each office is charged <strong>P[i]</strong> rupees every day for catering at their lunch time, i.e., for time <strong>S[i]</strong> to <strong>E[i]</strong>. Each employee in the startup can cater to atmost one office at a time and one employee is enough to complete the catering needs of an office. An employee earns <strong>C</strong> rupees a day. Also, there are <strong>M</strong> one way roads in the city, each motorable by bike. The average speed of bike in Kanpur is <strong>1km per V minutes</strong>. <br /><br /></p>
<p>Since Bob would want to maximize his profit, he would want to hire minimum number of employees. So, he would send a employee to some office, who after completing his duty, can cater to another office. Thereby, decreasing the number of employees, if possible.<br /><br /></p>
<p>Now, Alice, a very close friend and business partner of Bob, advises him against catering to a specific apartment <strong>J</strong>. Now Bob cannot refuse her. So, he decided to cater to as many offices of Jth apartment, till his profit does not decrease. Help Bob to find out how many offices of <strong>J</strong>th apartment he would serve and also, the maximum profit that he would reap.<br /><br /></p>
<h3>Input</h3>
<p>First line contains <strong>T</strong>, number of test cases.<br /><br />
Each Test case begins with line containing <strong>N</strong> <strong>M</strong> <strong>J</strong> <strong>C</strong> <strong>V</strong>.<br /><br /><br />
Next <strong>N</strong> lines follows, each line contain 4 space separated integers,<strong> X[i] S[i] E[i] P[i],</strong>, for the i-th line. <br /><br /><br />
The following M lines contain 3 space separated integers each, <strong>I</strong>, <strong>J</strong> and <strong>D<sub>i j</sub></strong>, such that <strong>I</strong> and <strong>J</strong> represent apartments and the distance between them is equal to <strong>D<sub>i j</sub></strong>.</p>
<h3>Output</h3>
<p>The output consists of <strong>T</strong> lines.<br /><br />
For each test case, print, in different lines, the number of offices catered in apartment <strong>J</strong> and maximum profit that can be earned. <br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ T ≤ 5</li>
<li>1 ≤ N ≤ 100</li>
<li>0 ≤ N ≤ 10</li>
<li>1 ≤ C ≤ 10<sup>5</sup></li>
<li>1 ≤ X ≤ 10<sup>6</sup></li>
<li>1 ≤ S[i] &lt; E[i] ≤ 10<sup>9</sup></li>
<li>1 ≤ P[i] ≤ 10<sup>6</sup></li>
<li>D<sub>i j</sub> ≤ 10<sup>4</sup></li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>1<br /><br />
3 6 1 100 1<br /><br />
10 40 50 90<br /><br />
4 15 35 110<br /><br />
5 10 20 50<br /><br />
1 2 1<br /><br />
2 1 1<br /><br />
1 3 1<br /><br />
3 1 1<br /><br />
2 3 1<br /><br />
3 2 1<br /><br /></p>
<h3>Sample Output</h3>
<p>9 600<br /><br /></p>
<h3>Explanation</h3>
<p>Since Bob has to cater apartment 2 and 3, so atleast 9 employees are required, as lunch time of apartment 2 and 3 are overlapping.<br /><br />
For apartment 1, the same 9 employees can be used for catering as the lunch times do not overlap with apartments 2 and 3 and since employing more people will reduce the profit, total of 9 people are employed.<br />Hence 9 offices are catered in apartment 1.<br /><br /></p>
<p>The equation for profit is X[2] * P[2] + X[3] * P[3] + 9 * P[1] - 9 * C = 600<br /><br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>