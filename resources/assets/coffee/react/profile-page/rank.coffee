###
# Copyright 2015 ppy Pty. Ltd.
#
# This file is part of osu!web. osu!web is distributed with the hope of
# attracting more community contributions to the core ecosystem of osu!.
#
# osu!web is free software: you can redistribute it and/or modify
# it under the terms of the Affero GNU General Public License as published by
# the Free Software Foundation, version 3 of the License.
#
# osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
# warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
# See the GNU Affero General Public License for more details.
#
# You should have received a copy of the GNU Affero General Public License
# along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
###
el = React.createElement

class ProfilePage.Rank extends React.Component
  render: =>
    return el('div') unless @props.rank.isRanked

    el 'div', className: 'user-profile-header__basic user-profile-header__basic--right',
        el 'p', className: 'profile-basic profile-basic--large',
          el 'span', className: 'user-rank-icon',
            el 'i', className: "fa osu fa-#{@props.mode}-o"
          "##{@props.rank.global.toLocaleString()}"
        if @props.countryName != null
          el 'p', className: 'profile-basic',
            "#{@props.countryName} ##{@props.rank.country.toLocaleString()}"
