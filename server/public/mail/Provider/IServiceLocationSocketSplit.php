<?php
declare(strict_types=1);

/**
* @copyright Copyright (c) 2023 Sebastian Krupinski <krupinski01@gmail.com>
*
* @author Sebastian Krupinski <krupinski01@gmail.com>
*
* @license AGPL-3.0-or-later
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as
* published by the Free Software Foundation, either version 3 of the
* License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/
namespace OCP\Mail\Provider;

use RuntimeException;

/**
 * This is the interface that is implemented by apps that
 * implement a mail provider
 * @since 30.0.0
 */
interface IServiceLocationSocketSplit extends IServiceLocation {

	/**
	 * 
	 * @since 30.0.0
	 */
	public function locationInbound(): string;

	/**
	 * 
	 * @since 30.0.0
	 */
	public function locationOutbound(): string;

	/**
	 * 
	 * @since 30.0.0
	 */
	public function getInboundHost(): string;

	/**
	 * 
	 * @since 30.0.0
	 */
	public function setInboundHost(string $value);

		/**
	 * 
	 * @since 30.0.0
	 */
	public function getOutboundHost(): string;

	/**
	 * 
	 * @since 30.0.0
	 */
	public function setOutboundHost(string $value);

	/**
	 * 
	 * @since 30.0.0
	 */
	public function getInboundPort(): int;

	/**
	 * 
	 * @since 30.0.0
	 */
	public function setInboundPort(int $value);

	/**
	 * 
	 * @since 30.0.0
	 */
	public function getOutboundPort(): int;

	/**
	 * 
	 * @since 30.0.0
	 */
	public function setOutboundPort(int $value);

}
